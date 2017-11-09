<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\UserDoesntExist;
use App\Http\Controllers\Controller;
use App\Jobs\CreateActivationLink;
use App\Mail\ActivationLinkMail;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
     *
     * @var string
     */
    protected $redirectTo = '/app#/projects';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        $email = $request->get('email');
        $user = User::where('email', $email)->get()->first();

        if(!$user)
            return redirect()->back()->withInput()->withErrors((new UserDoesntExist()));

        $isActive = (boolean) $user->active;
        if($isActive === false){
            $activationLink = (new CreateActivationLink($user->id))->handle();
            \Mail::to($user)
                ->send(new ActivationLinkMail($activationLink));
            return redirect()->route('activate.page')->with('message', 'An activation link was send to your email');
        }

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
}
