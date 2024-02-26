<?php

namespace App\Providers;

use App\Services\MessageService;
use App\Services\MessageServiceInterface;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View as ViewObject;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(MessageServiceInterface::class, MessageService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function (ViewObject $view) {
            $view->with('isAuthenticated', !auth()->guest());
        });
    }
}
