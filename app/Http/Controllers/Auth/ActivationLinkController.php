<?php

namespace App\Http\Controllers\Auth;


use App\ActivationLink;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActivateLinkRequest;
use App\Jobs\CreateActivationLink;
use App\Mail\ActivationLinkMail;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ActivationLinkController extends Controller
{

    public function activateLinkPage()
    {
        return $this->view->make('auth.resend-activation-link', [
            'error' => 'Links is not active, generate a new one.'
        ]);
    }

    public function sendLink(ActivateLinkRequest $request)
    {
        $email = $request->get('email');
        $user = User::where('email', $email)->get()->first();
        if ((boolean)$user->active === false) {
            $activationLink = (new CreateActivationLink($user->id))->handle();
            \Mail::to($user)->send(new ActivationLinkMail($activationLink));
            return redirect()->route('activate.page')->with('message', 'An activation was send to your email');
        } else {
            return back();
        }
    }

    public function activate(Request $request, $token)
    {
        $activationLink = ActivationLink::where('token', $token)->get()->first();
        if (!$activationLink)
            throw new ModelNotFoundException();
        $isActive = ActivationLink::isActiveLink($activationLink);
        if ($isActive) {
            $user = $activationLink->user;
            $user->active = true;
            $user->save();
            $activationLink->delete();
            return redirect()->route('login')->with('message', 'Account is activated');
        } else {
            return redirect()->route('activate.page')->with('message', 'Link is not active, generate a new one');
        }
    }

}