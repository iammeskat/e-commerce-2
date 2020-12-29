<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'hi'; //view('welcome');
});

Route::get('/login/facebook', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('login/facebook/callback', function () {
    $user = Socialite::driver('facebook')->user();

    dd($user);
});

Route::get('/login/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('login/google/callback', function () {
    $user = Socialite::driver('google')->user();

    dd($user);
});
