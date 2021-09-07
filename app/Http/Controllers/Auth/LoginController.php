<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\API\V1\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $login_api = new AuthLoginController;
        $response = $login_api->loginUser($request);
        $res = $response->getData();

        if ($res->error ?? '' == 'Unauthorized')
            return back()
                ->withInput($request->only('email'))
                ->withErrors(['email' => trans('auth.failed')]);

        $cookie = cookie($res->token_type, $res->access_token, $res->expires_in / 60);

        return redirect()->route('admin.home')->cookie($cookie);
    }
}
