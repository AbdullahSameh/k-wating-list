<?php

use App\Http\Controllers\ComingSoonController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::get('/werr', function () {
    return view('home');
})->name('home');

Route::get('/', function () {
    return redirect()->route('coming-soon', ['locale' => app()->getLocale()]);
})->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// blocked auth routes
// Route::get('login', fn() => dd('login'))->name('login');
Route::get('register', fn() => dd('register'))->name('register');
Route::get('forgot-password', fn() => dd('forgot-password'))->name('forgot-password');

Route::middleware(['auth'])->group(function () {
    // Route::redirect('settings', 'settings/profile');

    // Route::get('settings/profile', Profile::class)->name('profile.edit');
    // Route::get('settings/password', Password::class)->name('user-password.edit');
    // Route::get('settings/appearance', Appearance::class)->name('appearance.edit');

    // Route::get('settings/two-factor', TwoFactor::class)
    //     ->middleware(
    //         when(
    //             Features::canManageTwoFactorAuthentication()
    //             && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
    //             ['password.confirm'],
    //             [],
    //         ),
    //     )
    //     ->name('two-factor.show');
});

// Coming Soon Routes with Locale Support
Route::prefix('{locale}')
    ->where(['locale' => 'en|ar'])
    ->middleware(\App\Http\Middleware\SetLocale::class)
    ->group(function () {
        Route::get('/coming-soon', [ComingSoonController::class, 'index'])->name('coming-soon');
        Route::post('/coming-soon', [ComingSoonController::class, 'store'])->name('coming-soon.store');
    });

// Redirect root coming-soon to default locale
Route::get('/coming-soon', function () {
    return redirect()->route('coming-soon', ['locale' => app()->getLocale()]);
});
