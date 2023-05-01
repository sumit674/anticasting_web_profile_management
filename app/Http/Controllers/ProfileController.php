<?php

namespace App\Http\Controllers;

use App\Helpers\GeneralHelper;
use App\Http\Controllers\Controller;
use App\Models\IntroVideo;
use App\Models\State;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\UserProfileImage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function submitProfile()
    {
        $userid = auth()->user()->id;
        // $user = User::where('id', $userid)
        //     ->with([
        //         'images' => function ($image) {
        //             $image
        //                 ->offset(0)
        //                 ->orderBy('id', 'ASC')
        //                 ->limit(2);
        //         },
        //     ])
        //     ->first();
        $userProfile = UserProfile::where('user_id', $userid)->first();
        $userIntroVideo = IntroVideo::where('user_id', $userid)->first();
        $userInfo = User::where('id', $userid)
            ->with('images')
            ->first();
        //dd($userInfo);
        $states = State::all();

        return view('submit-profile-new.create', compact('userProfile', 'userInfo', 'states', 'userIntroVideo'));
    }
    public function submitProfileStore(Request $request)
    {
        //    dd($request->all());
        $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'date_of_birth' => 'required',
                'ethnicity' => 'required',
                'gender' => 'required',
                'current_location' => 'required',
                'image1' => ['required_without_all:image2,image3|image|mimes:jpg,jfif,png,jpeg,gif|max:4096'],
                'image2' => ['required_without_all:image1,image3|image|mimes:jpg,jfif,png,jpeg,gif|max:4096'],
                'image3' => ['required_without_all:image1,image2|image|mimes:jpg,jfif,png,jpeg,gif|max:4096'],
                'intro_video_link' => [
                    'url',
                    function ($attribute, $requesturl, $failed) {
                        if (!preg_match('/(youtube.com|youtu.be)\/(embed)?(\?v=)?(\S+)?/', $requesturl)) {
                            $failed(trans('Intro  video link should be youtube url', ['name' => trans('general.url')]));
                        }
                    },
                ],
                'work_reel1' => [
                    Rule::when(false, [
                        function ($attribute, $requesturl, $failed) {
                            if (!preg_match('/(youtube.com|youtu.be)\/(embed)?(\?v=)?(\S+)?/', $requesturl)) {
                                $failed(trans('Work reel one should be youtube url', ['name' => trans('general.url')]));
                            }
                        },
                    ]),
                ],
                'work_reel2' => [
                    Rule::when(false, [
                        function ($attribute, $requesturl, $failed) {
                            if (!preg_match('/(youtube.com|youtu.be)\/(embed)?(\?v=)?(\S+)?/', $requesturl)) {
                                $failed(trans('Work reel two should be youtube url', ['name' => trans('general.url')]));
                            }
                        },
                    ]),
                ],
                'work_reel3' => [
                    Rule::when(false, [
                        function ($attribute, $requesturl, $failed) {
                            if (!preg_match('/(youtube.com|youtu.be)\/(embed)?(\?v=)?(\S+)?/', $requesturl)) {
                                $failed(trans('Work reel three should be youtube url', ['name' => trans('general.url')]));
                            }
                        },
                    ]),
                ],
            ],
            [
                'first_name.required' => 'Please enter a firstname',
                'last_name.required' => 'Please enter a lastname',
                'date_of_birth.required' => 'Please enter a DateOfBirth',
                'ethnicity.required' => 'Please select ethnicity',
                'gender.required' => 'Please select  gender',
                'mobile_no.required' => 'Please enter mobile number',
                'current_location.required' => 'Please enter a current location',
                'intro_video_link.url' => 'The intro  video link must be a valid URL.',
                // 'work_reel1.url' => 'The work reel one must be a valid URL.',
                // 'work_reel2.url' => 'The work reel two must be a valid URL.',
                // 'work_reel3.url' => 'The work reel three must be a valid URL.',
            ],
        );
        // dd($request->all());
        $userId = auth()->user()->id;
        if (auth()->user()) {
            $user = User::find($userId);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->countryCode = $request->iso2;
            $user->mobile_no = str_replace(' ', '', $request->mobile_no);
            $user->save();
            $user_profile = UserProfile::where('user_id', auth()->user()->id)->first();
            if (!isset($user_profile)) {
                $user_profile = new UserProfile();
            }
            $user_profile->email = $request->email;
            $user_profile->date_of_birth = \Carbon\Carbon::parse($request->date_of_birth)->format('Y-m-d');
            $user_profile->ethnicity = $request->ethnicity;

            if ($request->work_reel1 != null) {
                $user_profile->work_reel1 = GeneralHelper::getYoutubeEmbedUrl($request->work_reel1);
            }
            if ($request->work_reel2 != null) {
                $user_profile->work_reel2 = GeneralHelper::getYoutubeEmbedUrl($request->work_reel2);
            }
            if ($request->work_reel3 != null) {
                $user_profile->work_reel3 = GeneralHelper::getYoutubeEmbedUrl($request->work_reel3);
            }
            $user_profile->gender = $request->gender;
            $user_profile->height = $request->height;
            $user_profile->current_location = $request->current_location;
            $user_profile->weight = $request->weight;
            $user_profile->about_me = $request->about_me;
            $user_profile->user_id = $userId;
            $user_profile->save();

            $folderPath = public_path() . '/upload/profile/';
            // upload image
            if ($request->has('image1') && $request->image1 != '') {
                $profile_image = UserProfileImage::where('user_id', $userId)
                    ->where('field_name', 'image1')
                    ->first();
                $existingImage = DB::table('user_profiles_image')
                    ->where('user_id', $userId)
                    ->where('field_name', 'image1')
                    ->first();

                if (@file_exists($folderPath . $existingImage?->image)) {
                    @unlink($folderPath . $existingImage->image);
                }
                if (!isset($profile_image)) {
                    $profile_image = new UserProfileImage();
                    $profile_image->user_id = $userId;
                }
                $fileType = GeneralHelper::base64MimeType($request->image1);
                if ($fileType == 'data:application/octet-stream') {
                    $file = GeneralHelper::uploadOtherFile($request, 'image1');
                } else {
                    $file = GeneralHelper::uploadImage($request, 'image1');
                }

                $profile_image->field_name = 'image1';
                $profile_image->image = $file;
                $profile_image->save();
            }
            if ($request->has('image2') && $request->image2 != '') {
                $profile_image = UserProfileImage::where('user_id', $userId)
                    ->where('field_name', 'image2')
                    ->first();
                $existingImage = DB::table('user_profiles_image')
                    ->where('user_id', $userId)
                    ->where('field_name', 'image2')
                    ->first();
                if (file_exists($folderPath . $existingImage?->image)) {
                    @unlink($folderPath . $existingImage->image);
                }
                if (!isset($profile_image)) {
                    $profile_image = new UserProfileImage();
                    $profile_image->user_id = $userId;
                }

                // $file = GeneralHelper::uploadBase64Image($request, 'image2');
                $fileType = GeneralHelper::base64MimeType($request->image2);
                if ($fileType == 'data:application/octet-stream') {
                    $file = GeneralHelper::uploadOtherFile($request, 'image2');
                } else {
                    $file = GeneralHelper::uploadImage($request, 'image2');
                }
                $profile_image->field_name = 'image2';
                $profile_image->image = $file;
                $profile_image->save();
            }
            if ($request->has('image3') && $request->image3 != '') {
                $profile_image = UserProfileImage::where('user_id', $userId)
                    ->where('field_name', 'image3')
                    ->first();
                $existingImage = DB::table('user_profiles_image')
                    ->where('user_id', $userId)
                    ->where('field_name', 'image3')
                    ->first();
                if (file_exists($folderPath . $existingImage?->image)) {
                    @unlink($folderPath . $existingImage->image);
                }
                if (!isset($profile_image)) {
                    $profile_image = new UserProfileImage();
                    $profile_image->user_id = $userId;
                }
                // $file = GeneralHelper::uploadBase64Image($request, 'image3');
                $fileType = GeneralHelper::base64MimeType($request->image3);
                if ($fileType == 'data:application/octet-stream') {
                    $file = GeneralHelper::uploadOtherFile($request, 'image3');
                } else {
                    $file = GeneralHelper::uploadImage($request, 'image3');
                }
                $profile_image->field_name = 'image3';
                $profile_image->image = $file;
                $profile_image->save();
            }
            /*Capture Image */
            /* if ($request->has('capture_image') && $request->capture_image != '') {
                //dd($request->capture_image);
                $profile_image = UserProfileImage::where('user_id', $userId)
                    ->where('field_name', 'capture_image')
                    ->first();
                $existingImage = DB::table('user_profiles_image')
                    ->where('user_id', $userId)
                    ->where('field_name', 'capture_image')
                    ->first();

                if (@file_exists($folderPath . $existingImage?->image)) {
                    @unlink($folderPath . $existingImage->image);
                }
                if (!isset($profile_image)) {
                    $profile_image = new UserProfileImage();
                    $profile_image->user_id = $userId;
                }
                $fileType = GeneralHelper::base64MimeType($request->capture_image);
                if ($fileType == 'data:application/octet-stream') {
                    $file = GeneralHelper::uploadOtherFile($request, 'capture_image');
                } else {
                    $file = GeneralHelper::uploadImage($request, 'capture_image');
                }

                $profile_image->field_name = 'capture_image';
                $profile_image->image = $file;
                $profile_image->save();
            } */
            // save intro video
            $user_introvideo = IntroVideo::where('user_id', auth()->user()->id)->first();
            if (!isset($user_introvideo)) {
                $user_introvideo = new IntroVideo();
                $user_introvideo->user_id = auth()->user()->id;
            }
            if ($request->has('intro_video_link')) {
                $user_introvideo->intro_video_link = GeneralHelper::getYoutubeEmbedUrl($request->intro_video_link);
            }
            $user_introvideo->save();

            return redirect()
                ->back()
                ->with('message', 'Your profile saved successfully.');
        } else {
            return redirect()->route('users.login');
        }
    }
    // public function submitWorkReel(Request $request)
    // {
    //     //  dd($request->all());
    //     $user_profile = UserProfile::where('user_id', auth()->user()->id)->first();
    //     if (!isset($user_profile)) {
    //         $user_profile = new UserProfile();
    //     }
    //     $user_profile->user_id = auth()->user()->id;
    //     if ($request->has('work_reel1')) {
    //         $user_profile->work_reel1 = GeneralHelper::getYoutubeEmbedUrl($request->work_reel1);
    //     }
    //     if ($request->has('work_reel2')) {
    //         $user_profile->work_reel2 = GeneralHelper::getYoutubeEmbedUrl($request->work_reel2);
    //     }
    //     if ($request->has('work_reel3')) {
    //         $user_profile->work_reel3 = GeneralHelper::getYoutubeEmbedUrl($request->work_reel3);
    //     }
    //     $user_profile->save();
    //     return redirect()->back();
    // }

    public function uploadUserImage(Request $request)
    {
        $userId = auth()->user()->id;
        if ($request->file('picture')) {
            $profile_image = new UserProfileImage();
            if ($request->has('old_image') && $request->old_image != null && $request->old_image != 'undefined') {
                $fileinfo = pathinfo($request->old_image);
                $oldFilename = $fileinfo['basename'];
                $profile_image = UserProfileImage::where('user_id', $userId)
                    ->where('image', $oldFilename)
                    ->first();
            }
            $images = $request->file('picture');

            $filename = $images->getClientOriginalName();
            $image_name = time() . '-' . str_replace(' ', '-', $filename);
            $image_name = str_replace(['(', ')'], '', $image_name);
            $ImagePath = $images->move('upload/profile', $image_name);
            //  Image::make($request->file('picture'))
            // ->resize(200, 200)->save($image_name);
            $profile_image->image = $image_name;
            $profile_image->user_id = $userId;
            $profile_image->save();
            return redirect()->back();
        }
    }
    public function IntroVideo(Request $request)
    {
        $request->validate(
            [
                'intro_video_link' => [
                    'url',
                    function ($attribute, $requesturl, $failed) {
                        if (!preg_match('/(youtube.com|youtu.be)\/(embed)?(\?v=)?(\S+)?/', $requesturl)) {
                            $failed(trans('Intro  video link should be youtube url', ['name' => trans('general.url')]));
                        }
                    },
                ],
            ],
            [
                'intro_video_link.url' => 'The intro  video link must be a valid URL.',
            ],
        );

        $user_introvideo = IntroVideo::where('user_id', auth()->user()->id)->first();
        if (!isset($user_introvideo)) {
            $user_introvideo = new IntroVideo();
        }
        $user_introvideo->user_id = auth()->user()->id;
        if ($request->has('intro_video_link')) {
            $user_introvideo->intro_video_link = GeneralHelper::getYoutubeEmbedUrl($request->intro_video_link);
        }
        $user_introvideo->save();
        return redirect()
            ->back()
            ->with('message', 'Your intro video saved.');
    }

    public function viewProfileDetails()
    {
        $profile = UserProfile::where('user_id', auth()->user()->id)->first();

        if (!isset($profile)) {
            return redirect()->route('users.submitProfile');
        }
        $user_id = auth()->user()->id;
        $item = User::where('id', $user_id)
            ->with('profile')
            ->with('introVideo')
            ->with('images')
            ->first();

        return view('view-profile-details', compact('item'));
    }
}
