<?php

namespace App\Http\Controllers;

use App\Models\UserProfileImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{UserProfile};
use DB;

class ImageController extends Controller
{
    //
    public function deleteHeadShotImageOne($id)
    {
        $userProfileDeleteImageOne = DB::table('user_profiles')
            ->where('id', $id)
            ->update([
                'image2' => null,
            ]);
        if (isset($userProfileDeleteImageOne)) {
            return redirect()
                ->back()
                ->with('success', 'Headshot deleted successfully.');
        } else {
            return redirect()
                ->back()
                ->with('error', 'Something went wrong, please try again.');
        }
    }
    public function deleteHeadShotImageTwo($id)
    {
        $userProfileDeleteImageTwo = DB::table('user_profiles')
            ->where('id', $id)
            ->update([
                'image3' => null,
            ]);
        if (isset($userProfileDeleteImageTwo)) {
            return redirect()
                ->back()
                ->with('success', 'Headshot deleted successfully.');
        } else {
            return redirect()
                ->back()
                ->with('error', 'Something went wrong, please try again.');
        }

    }
    public function deleteHeadShotImageAll(Request $request, $user_id)
    {
        if (isset($user_id) && $user_id !== '') {
            $userImages = UserProfileImage::where('user_id', $user_id)->get();
            if (isset($userImages) && count($userImages) > 0) {
                UserProfileImage::where('user_id', $user_id)->delete();
                return redirect()
                    ->back()
                    ->with('message', 'All headshot deleted successfully.');
            } else {
                return redirect()
                    ->back()
                    ->with('message', 'Something went wrong, please try again.');
            }
        }
        return redirect()
            ->back()
            ->with('message', 'Something went wrong, please try again.');
    }
}
