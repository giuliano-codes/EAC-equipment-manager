<?php

use App\Http\Controllers\GoogleLoginController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('login');
});

Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('google.login');
 
Route::get('/auth/google/callback', GoogleLoginController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'accept.terms'
])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/accept-terms', function () {
        return view('accept-terms');
    })->name('accept-terms');
});