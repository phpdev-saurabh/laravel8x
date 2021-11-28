<?php

use App\Http\Controllers\Socialite\SocialiteController;

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'socialite'],function(){
	Route::get('/', [SocialiteController::class, 'index'])->name('socialite.index');
	Route::get('/github/redirect', [SocialiteController::class, 'github_redirect'])->name('socialite.github.redirect');
	Route::get('/github/callback', [SocialiteController::class, 'github_callback'])->name('socialite.github.callback');
});