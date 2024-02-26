<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Application|Factory
     */
    public function render(): View|Application|Factory
    {
        return view('components.footer', ['resourceList' => [
            [
                'path' =>  'https://auth0.com/why-auth0/',
                'label' => 'Why Auth0',
            ],
            [
                'path' =>  'https://auth0.com/docs/get-started',
                'label' => 'How It Works',
            ],
            [
                'path' =>  'https://auth0.com/blog/developers/',
                'label' => 'Developer Blog',
            ],
            [
                'path' =>  'https://auth0.com/contact-us',
                'label' => 'Contact an Expert',
            ],
        ]]);
    }
}
