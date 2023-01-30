<?php

namespace App\Http\Controllers\Seller\Auth;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     */
    protected string $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:seller', ['except' => 'logout']);
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('seller.auth.login');
    }

    /**
     * The user has been authenticated.
     *
     * @param  Seller  $user
     */
    protected function authenticated(Request $request, $user)
    {
        if ($user->isAccountBlocked()) {
            $response = $this->logout($request);
            alert()->error('Your account is disabled.<br>Please contact administrator for assistance.');

            return $response;
        }
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('seller');
    }

    /**
     * The user has logged out of the application.
     */
    protected function loggedOut(Request $request)
    {
        return redirect()->route('seller.login');
    }

    /**
     * Where to redirect users after login.
     *
     * @return string
     */
    private function redirectTo()
    {
        return route('seller.dashboard');
    }
}