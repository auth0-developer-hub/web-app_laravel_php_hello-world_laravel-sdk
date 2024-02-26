<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Auth0Feature extends Component
{
    public string $title;
    public string $description;
    public string $resourceUrl;
    public string $icon;

    public function __construct(string $title, string $description, string $resourceUrl, string $icon)
    {
        $this->title = $title;
        $this->description = $description;
        $this->resourceUrl = $resourceUrl;
        $this->icon = $icon;
    }

    public function render(): View|Application|Factory
    {
        return view('components.auth0-feature');
    }
}
