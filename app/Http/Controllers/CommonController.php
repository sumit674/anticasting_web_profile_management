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
    public function ValidateYoutubeUrl(Request $request)
    {

        $url = $request->input('url');
        $pattern = '/^(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:watch\?v=|embed\/|v\/|(?:live))|youtu\.be\/)([^\s&]+)/';
        $isValid = preg_match($pattern, $url);

        return response()->json([
            'isValid' => $isValid
        ]);
    }
    public function ValidateImdbUrl(Request $request)
    {
        $url = $request->input('url');
        $pattern = '/^https?:\/\/(?:www\.)?imdb\.com\/title\/tt\d{7,8}\/?$/';
        $isValid = preg_match($pattern, $url);

        return response()->json([
            'isValid' => $isValid
        ]);
    }


}
