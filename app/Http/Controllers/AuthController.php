<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class AuthController
{
    public function signup(): Redirector|RedirectResponse|Application
    {
        return redirect(auth()->guard()->sdk()->signup(route('callback')));
    }
}
