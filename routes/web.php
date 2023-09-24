<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('home.home');
})->name('home');
Route::get('/home', function () {
    return view('home.home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact.create');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('users.create');
});

Route::get('/event', function () {
    return view('event.event');
});
Route::resource('users', UserController::class);
// Route::post('login', [UserController::class, 'login']);

Route::post('login', [AuthController::class, 'login'])->name('login');
// Route::post('login', 'Auth\AuthController@login');