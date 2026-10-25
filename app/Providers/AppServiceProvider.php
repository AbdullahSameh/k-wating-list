<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Opcodes\LogViewer\Facades\LogViewer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register the LogViewer authentication callback
        // The address must be verified: an e-mail match alone can be met by anyone who signs up with it.
        LogViewer::auth(function ($request) {
            return $request->user()
                && $request->user()->hasVerifiedEmail()
                && in_array($request->user()->email, [
                    'kunoozai87@gmail.com',
                ]);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
