<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

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

Route::resource('rooms', RoomController::class);

Route::redirect('/', '/rooms');

/* Route::get('/', function () {
    $data = ['title' => 'Rooms'];
    return view('pages.rooms', $data);
}); */

// Route::get('/about', [PagesController::class, 'about']);

Route::get('/bookings', function () {
    $data = ['title' => 'Bookings'];
    return view('pages.bookings', $data);
});

Route::get('/about', function () {
    $data = ['title' => 'About'];
    return view('pages.about', $data);
});

// To see all routes, run: php artisan route:list

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
