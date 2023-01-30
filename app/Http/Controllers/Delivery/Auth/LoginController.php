<?php

namespace App\Http\Controllers\Delivery\Auth;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
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
        $this->middleware('guest:delivery', ['except' => 'logout']);
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('delivery.auth.login');
    }

    /**
     * The user has been authenticated.
     *
     * @param  Delivery  $user
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
        return Auth::guard('delivery');
    }

    /**
     * The user has logged out of the application.
     */
    protected function loggedOut(Request $request)
    {
        return redirect()->route('delivery.login');
    }

    /**
     * Where to redirect users after login.
     *
     * @return string
     */
    private function redirectTo()
    {
        return route('delivery.dashboard');
    }
}