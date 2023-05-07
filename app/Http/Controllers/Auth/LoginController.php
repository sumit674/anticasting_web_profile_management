<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
//use App\Http\Requests\LoginRequest;
class LoginController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }
    public function submitLogin(Request $request)
    {
        //dd($request);
        $request->validate(
            [
                'email' => 'required',
                'password' => ['required', 'string', 'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/', 'min:8'],
                'captcha' => 'required|captcha',
            ],
            [
                'email.required' => 'Please enter email',
                'password.required' => 'Please enter password',
                'captcha.captcha' => 'Captcha text incorrect.',
            ],
        );
        $credentials = $request->only(['email', 'password']);
        $remember_me = $request->has('remeber_me') ? true : false;

        // dd($credentials);
        if (auth()->attempt($credentials, $remember_me)) {
            if (auth()?->user()?->status == '0') {
                return redirect()
                    ->route('users.login')
                    ->with('error', 'Your account is not activated yet, please activate your account and try again.');
            }
            if (auth()?->user()?->user_type == '0') {
                return redirect()
                    ->route('users.view-profile')
                    ->with('success', 'Login successfully.');
            }
        }
        //    dd('unLogin');
        return redirect()
            ->back()
            ->with('error', 'Invalid login credentials.');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()
            ->route('users.login')
            ->with('success', 'Logged out successfully.');
    }
}
