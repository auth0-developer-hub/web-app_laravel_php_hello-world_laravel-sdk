<?php

namespace App\Http\Controllers;

use App\Services\MessageServiceInterface;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;

class MessageController extends Controller
{
    public function publicMessage(MessageServiceInterface $messageService): View|Application|Factory
    {
        return view('pages.public', ['message' => $messageService->getPublicMessage()]);
    }

    public function protectedMessage(MessageServiceInterface $messageService): View|Application|Factory
    {
        return view('pages.protected', ['message' => $messageService->getProtectedMessage()]);
    }

    public function adminMessage(MessageServiceInterface $messageService): View|Application|Factory
    {
        return view('pages.admin', ['message' => $messageService->getAdminMessage()]);
    }
}
