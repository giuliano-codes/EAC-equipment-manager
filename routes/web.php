<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\RoomController;
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

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
})->name('terms-and-conditions');
 
Route::get('/auth/google/callback', GoogleLoginController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'accept.terms'
])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin')->can('administrate');
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'accept.terms'
])->controller(BookingController::class)->group(function () {
    Route::get('/booking', 'index')->name('booking.index');
    Route::get('/booking/create', 'create')->name('booking.create');
    Route::get('/booking/{booking}/', 'show')->name('booking.show');
    Route::get('/booking/{booking}/delete', 'delete')->name('booking.delete')->can('delete', 'booking');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'accept.terms'
])->controller(EquipmentController::class)->group(function () {
    Route::get('/equipment', 'index')->name('equipment.index');
    Route::get('/equipment/create', 'create')->name('equipment.create')->can('create','App\Models\Equipment');
    Route::get('/equipment/{equipment}/', 'show')->name('equipment.show');
    Route::get('/equipment/{equipment}/edit', 'edit')->name('equipment.edit')->can('update', 'equipment');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'accept.terms'
])->controller(RoomController::class)->group(function () {
    Route::get('/room', 'index')->name('room.index');
    Route::get('/room/create', 'create')->name('room.create');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/accept-terms', function () {
        if (auth()->user()->accept_terms_and_privacy_policy) {
            return redirect()->route('home');
        } else {
            return view('accept-terms');
        }
    })->name('accept-terms');
});