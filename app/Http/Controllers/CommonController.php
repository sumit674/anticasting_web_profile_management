<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CommonController extends Controller
{
    //
    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }

    public function sendPictureNotification()
    {
        // $userProfile = UserProfile::whereRaw('MONTH(date_of_birth) = MONTH(NOW())')->get();
        $userProfile = User::where('picture_updated_at', '<=', Carbon::now()->subDays(180)->toDateTimeString())
            ->where('picture_email_sent', false)
            ->where('user_type', '0')
            ->get();
        if (isset($userProfile)) {
            foreach ($userProfile as $user) {
                \Mail::send('emails.profile-picture-update-alert', ['Firstname' => $user->first_name, 'Lastname' => $user->last_name], function ($message) use ($user) {
                    $message->to($user->email);
                    $message->subject('PROFILE PICTURE UPDATE ALERT');
                });
            }
        }
        dd($userProfile);

    }
    public function IntroVideoValidateYoutubeUrl(Request $request){

        $youtubeUrl = $request->input('intro_video_link');

        // Perform additional validation on the YouTube URL if required
        // Example: Check if the video exists or extract video ID

        // Return a JSON response indicating whether the URL is valid or not
        return response()->json([
            'valid' => true, // Set this based on your validation logic
        ]);
    }
    public function WorkReelOneVideoValidateYoutubeUrl(Request $request){
        $youtubeUrl = $request->input('work_reel1');
        return response()->json([
            'valid' => true, // Set this based on your validation logic
        ]);
    }
    public function WorkReelTwoVideoValidateYoutubeUrl(Request $request){
        $youtubeUrl = $request->input('work_reel2');

        return response()->json([
            'valid' => true, // Set this based on your validation logic
        ]);
    }
    public function WorkReelThreeVideoValidateYoutubeUrl(Request $request){
        $youtubeUrl = $request->input('work_reel3');

        return response()->json([
            'valid' => true, // Set this based on your validation logic
        ]);
    }
    public function  ValidateImdbUrl(Request $request){
        $imdbUrl = $request->input('imdb_profile');

        return response()->json([
            'valid' => true, // Set this based on your validation logic
        ]);
    }
}
