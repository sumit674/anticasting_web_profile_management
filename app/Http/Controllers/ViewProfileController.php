<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{UserProfile,User};
class ViewProfileController extends Controller
{
    //
    public function viewProfile()
    {
        $profile = UserProfile::where('user_id', auth()->user()->id)->first();
     
        if (!isset($profile)) {
            return redirect()->route('users.submitProfile');
        }
        return view('view-profile-details');
    }
}
