<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FooterHyperlink extends Component
{
    public string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function render(): View|Application|Factory
    {
        return view('components.footer-hyperlink');
    }
}
