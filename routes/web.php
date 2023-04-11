<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Auth::routes([
    'verify' => true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('/aboutus', [App\Http\Controllers\WebController::class, 'aboutus'])->name('aboutus');
Route::get('/faq', [App\Http\Controllers\WebController::class, 'faq'])->name('faq');
Route::get('/help', [App\Http\Controllers\WebController::class, 'help'])->name('help');
Route::get('/loginV', [App\Http\Controllers\HomeController::class, 'loginV'])->name('loginV');
Route::get('/signupV', [App\Http\Controllers\HomeController::class, 'signupV'])->name('signupV');
Route::get('/loginA', [App\Http\Controllers\HomeController::class, 'loginA'])->name('loginA');
Route::get('/signupA', [App\Http\Controllers\HomeController::class, 'signupA'])->name('signupA');
Route::get('/air', [App\Http\Controllers\WebController::class, 'air'])->name('air.index');
Route::get('/land', [App\Http\Controllers\WebController::class, 'land'])->name('land.index');
Route::get('/water', [App\Http\Controllers\WebController::class, 'water'])->name('water.index');
Route::get('/rail', [App\Http\Controllers\WebController::class, 'rail'])->name('rail.index');

// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
 
//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');

// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();
 
//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Route::get('/profile', function () {
//     // Only verified users may access this route...
// })->middleware(['auth', 'verified']);
