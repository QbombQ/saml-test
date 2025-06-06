<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/saw/redirect', function () {
    return Socialite::driver('saml2')->redirect();
});

Route::post('/callback', function () {
    $user = Socialite::driver('saml2')->user();
    dd($user);
});

