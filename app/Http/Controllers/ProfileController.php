<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProfileController extends Controller
{
    public function index(): View|Application|Factory
    {
        $userAttributes = [
            'nickname' => "Customer",
            'name' => "One Customer",
            'picture' => "https://cdn.auth0.com/blog/hello-auth0/auth0-user.png",
            'updated_at' => "2021-05-04T21:33:09.415Z",
            'email' => "customer@example.com",
            'email_verified' => false,
            'sub' => "auth0|12345678901234567890"
        ];

        return view('pages.profile', [
            'userAttributes' => $userAttributes,
            'code' => json_encode(
                $userAttributes,
                \JSON_PRETTY_PRINT | \JSON_UNESCAPED_UNICODE | \JSON_UNESCAPED_SLASHES
            )
        ]);
    }
}
