<?php


use App\Domains\Auth\Models\User;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Domains\Features\Market\Http\Controllers\MarketController;

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the user has not confirmed their email
 * frontend.user.route
 */
Route::group(['as' => 'user.', 'middleware' => ['auth', 'password.expires', config('project.access.middleware.verified')]], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])
        ->middleware('type:'.User::TYPE_USER)
        ->name('dashboard');

    Route::get('account', [AccountController::class, 'index'])->name('account');
    Route::get('dashboard/moneytransfers', [DashboardController::class, 'moneytransfers'])->name('moneytransfers');

    Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');

    //frontend.user.market.register
    Route::get('mymarket', [MarketController::class, 'index'])->name('market.index');
    Route::get('market/register', [MarketController::class, 'registerMarketForm'])->name('market.register.form');
    Route::post('market/register', [MarketController::class, 'register'])->name('market.register.post');
    Route::get('market/verify/name', [MarketController::class, 'validateName'])->name('market.validate.name');
    Route::get('market/verify/email', [MarketController::class, 'validateEmail'])->name('market.validate.email');

});
