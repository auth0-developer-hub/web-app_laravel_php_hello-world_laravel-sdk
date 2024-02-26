<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CodeSnippet extends Component
{
    public ?string $title;
    public ?string $code;

    public function __construct(string $title = null, string $code = null)
    {
        $this->title = $title;
        $this->code = $code;
    }

    public function render(): View|Application|Factory
    {
        return view('components.code-snippet');
    }
}
