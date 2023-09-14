<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaderController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/membership', [HomeController::class, 'membership'])->name('membership');
Route::get('/black-belts', [HomeController::class, 'blackBelts'])->name('black-belts');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/notice', [HomeController::class, 'notice'])->name('notice');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');



Route::get('/leader-details/{id}', [LeaderController::class, 'leaderDetails'])->name('leader-details');


