<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{UserProfile, UserProfileImage, User, State, IntroVideo};
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Helpers\GeneralHelper;
use DB;

class SubmitProfileController extends Controller
{
    //
    public function submitUserProfile($userId = '')
    {
        $id = auth()->user()?->id;
        $userProfile = UserProfile::where('user_id')->first();
        $userIntroVideo = IntroVideo::where('user_id')->first();
        $userInfo = User::where('id')
            ->first();
        $states = State::all();
        return view('admin.submit-profile.create-profile', compact('states', 'userProfile', 'userInfo'));
    }

    public function storeUserProfile(Request $request)
    {
        // dd($request->all());
        $request->validate(
            [
                'first_name' => 'required|regex:/^[a-zA-Z ]+[a-zA-Z 0-9]*$/',
                'last_name' => 'required|regex:/^[a-zA-Z ]+[a-zA-Z 0-9]*$/',
                'date_of_birth' => 'required',
                'ethnicity' => 'required',
                'gender' => 'required',
                'current_location' => 'required|regex:/^[a-zA-Z ]+[a-zA-Z 0-9]*$/',
                'height' => 'numeric|min:1|max:250',
                // 'mobile_no'=>'required',
                'mobile_no' => [
                    'required',
                    'regex:/^[0-9][0-9\s]+[0-9]$/',
                    // check number with white space
                    function ($attribute, $value, $fail) {
                        if (strlen(str_replace(' ', '', $value)) != 10) {
                            $fail('Message fail');
                            // dd('error');
                            return false;
                        }
                        return true;
                    },
                ],
                'about_me' => 'string|max:300',
                'weight' => 'numeric|min:1|max:400',
                'image1' => ['required_without_all:image2,image3|image|mimes:jpg,jfif,png,jpeg,gif|max:4096'],
                'image2' => ['required_without_all:image1,image3|image|mimes:jpg,jfif,png,jpeg,gif|max:4096'],
                'image3' => ['required_without_all:image1,image2|image|mimes:jpg,jfif,png,jpeg,gif|max:4096'],
                'intro_video_link' => [
                    'required',
                    function ($attribute, $requesturl, $failed) {
                        if (!preg_match('/(youtube.com|youtu.be)\/(embed)?(\?v=)?(\S+)?/', $requesturl)) {
                            $failed(trans('Intro  video link should be youtube url', ['name' => trans('general.url')]));
                        }
                    },
                ],
                'work_reel1' => [
                    'nullable',
                    function ($attribute, $requesturl, $failed) {
                        if (!preg_match('/(youtube.com|youtu.be)\/(embed)?(\?v=)?(\S+)?/', $requesturl)) {
                            $failed(trans('Work reel one should be youtube url', ['name' => trans('general.url')]));
                        }
                    },
                ],
                'work_reel2' => [
                    'nullable',
                    function ($attribute, $requesturl, $failed) {
                        if (!preg_match('/(youtube.com|youtu.be)\/(embed)?(\?v=)?(\S+)?/', $requesturl)) {
                            $failed(trans('Work reel two should be youtube url', ['name' => trans('general.url')]));
                        }
                    },
                ],
                'work_reel3' => [
                    'nullable',
                    function ($attribute, $requesturl, $failed) {
                        if (!preg_match('/(youtube.com|youtu.be)\/(embed)?(\?v=)?(\S+)?/', $requesturl)) {
                            $failed(trans('Work reel three should be youtube url', ['name' => trans('general.url')]));
                        }
                    },
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
                'intro_video_link.required' => 'Please enter your intro video',
                'about_me.max' => 'Maximum 300 characters allowed.',
                // 'work_reel1.url' => 'The work reel one must be a valid URL.',
                // 'work_reel2.url' => 'The work reel two must be a valid URL.',
                // 'work_reel3.url' => 'The work reel three must be a valid URL.',
            ],
        );
        $dateOfBirth = Carbon::parse($request->date_of_birth)->format('Y-m-d');
        $age = Carbon::parse($dateOfBirth)->age;
        $flag = 1;
        if ($flag == 1) {
            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->age = $age;
            $user->email = $request->email;
            $user->mobile_no = str_replace(' ', '', $request->mobile_no);
            $user->countryCode = $request->iso2;
            $user->picture_updated_at = date('Y-m-d');
            $user->picture_email_sent = false;
            $user->save();
            $user_profile = new UserProfile();
            $user_profile->ethnicity = $request->ethnicity;
            $user_profile->email = $request->email;
            $user_profile->date_of_birth = Carbon::parse($request->date_of_birth)->format('Y-m-d');
            $user_profile->gender = $request->gender;
            $user_profile->height = $request->height;
            $user_profile->weight = $request->weight;
            $user_profile->imdb_profile = $request->imdb_profile;
            $user_profile->skills = $request->skills;
            $user_profile->formal_acting = $request->formal_acting;
            $user_profile->current_location = $request->current_location;
            $user_profile->about_me = $request->about_me;
            $user_profile->user_id = $user->id;

            if ($request->work_reel1 != null) {
                $user_profile->work_reel1 = GeneralHelper::getYoutubeEmbedUrl($request->work_reel1);
            } else {
                $user_profile->work_reel1 = null;
            }
            if ($request->work_reel2 != null) {
                $user_profile->work_reel2 = GeneralHelper::getYoutubeEmbedUrl($request->work_reel2);
            } else {
                $user_profile->work_reel2 = null;
            }
            if ($request->work_reel3 != null) {
                $user_profile->work_reel3 = GeneralHelper::getYoutubeEmbedUrl($request->work_reel3);
            } else {
                $user_profile->work_reel3 = null;
            }
            $folderPath = public_path() . '/upload/profile/';

            //First  image
            if ($request->has('image1') && $request->image1 != null) {
                $file = $request->file('image1');
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($folderPath, $fileName);
                $user_profile->image1 = $fileName;
                $user_profile->save();
            }
            //Second  image
            if ($request->has('image2') && $request->image2 != null) {

                $file = $request->file('image2');
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($folderPath, $fileName);
                $user_profile->image2 = $fileName;
                $user_profile->save();
            }
            //Third Image
            if ($request->has('image3') && $request->image3 != null) {
                $file = $request->file('image3');
                $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($folderPath, $fileName);
                $user_profile->image3 = $fileName;
                $user_profile->save();
            }
            $user_profile->save();


            $user_introvideo = new IntroVideo();
            $user_introvideo->user_id = $user->id;

            if ($request->has('intro_video_link')) {
                $user_introvideo->intro_video_link = GeneralHelper::getYoutubeEmbedUrl($request->intro_video_link);
            }
            $user_introvideo->save();
            return redirect()
                ->route('admin.profile-dashboard')
                ->with('success', 'Profile submitted/saved successfully.');
        } else {
            return redirect()->route('users.login')
                ->with('error', 'Something went wrong, please try again.');
        }
    }

    public function editUserProfile($userId = '')
    {
        $userProfile = UserProfile::where('user_id', $userId)->first();
        $userIntroVideo = IntroVideo::where('user_id', $userId)->first();
        $userInfo = User::where('id', $userId)
            ->with('images')
            ->first();
        //dd($userInfo);
        $states = State::all();

        return view('admin.submit-profile.create-profile');
    }
    public function dashboard()
    {

        return view('admin.submit-profile.dashboard');
    }

}
