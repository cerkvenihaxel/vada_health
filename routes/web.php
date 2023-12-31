<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

    Route::group(['prefix' => 'doctors'], function () {
        Route::get('/home', function(){ return view('front.profile.doctors.doctor-home'); })->name('profile.doctor-home');
        Route::get('/new-request', function () { return view('front.profile.doctors.requests.create'); })->name('profile.doctor.new-request');
    });


    Route::get('/os-home', function () { return view('front.profile.os.os-home'); })->name('profile.os-home');
    Route::get('/manager-home', function () { return view('front.profile.manager.manager-home'); })->name('profile.manager-home');
});
