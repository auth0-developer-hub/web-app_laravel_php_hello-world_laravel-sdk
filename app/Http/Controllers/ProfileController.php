<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProfileController extends Controller
{
    public function index(): View|Application|Factory
    {
        $user = auth()->user();
        $userAttributes = array_values((array) $user)[0];

        return view('pages.profile', [
            'user' => $user,
            'code' => json_encode(
                $userAttributes,
                \JSON_PRETTY_PRINT | \JSON_UNESCAPED_UNICODE | \JSON_UNESCAPED_SLASHES
            )
        ]);
    }
}
