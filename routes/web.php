<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EventController;
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

// Route::get('/', function () {
//     return view('home.home');
// })->name('home');
Route::get('/', [EventController::class, 'index']);

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
Route::get('/create-event', function () {
    $categories = [
        'Music',
        'Drama',
    ];
    return view('event.create', ['categories' => $categories]);
});
// Route::get('/all-events', function () {
//     return view('event.allevents');
// });

Route::get('/event/{event}', [EventController::class, 'showEvent']);

Route::resource('users', UserController::class);
// Route::post('login', [UserController::class, 'login']);

Route::post('login', [AuthController::class, 'login'])->name('login');
// Route::post('login', 'Auth\AuthController@login');

Route::post('/create-event', [EventController::class, 'store']);
Route::get('/all-events', [EventController::class, 'allApprovedEvents']);

Route::post('/buy-ticket/{eventId}/{ticketType}', [BookingController::class, 'buyTicket'])->name('buy-ticket');

Route::get('/my-events/{user}', [EventController::class, 'myEvents']);
Route::post('/delete-event/{user}', [EventController::class, 'deleteEvent']);
