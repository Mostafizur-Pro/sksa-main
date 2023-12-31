<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\ProfileSearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/membership', [HomeController::class, 'membership'])->name('membership');
Route::get('/bangladesh', [HomeController::class, 'bangladesh'])->name('bangladesh');
Route::get('/international', [HomeController::class, 'international'])->name('international');
Route::get('/black-belts', [HomeController::class, 'blackBelts'])->name('black-belts');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/notice', [HomeController::class, 'notice'])->name('notice');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');



Route::get('/leader-details/{id}', [LeaderController::class, 'leaderDetails'])->name('leader-details');



Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login-user', [UserController::class, 'loginUser'])->name('login-user');


Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register-user', [UserController::class, 'registerUser'])->name('register-user');

Route::get('/logout', [UserController::class, "logout"]);

Route::get('/forget-password', [UserController::class, 'forgetPassword'])->name('forget-password');



Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('isLoggedIn');

Route::get('/edit-profile/{id}', [UserController::class, 'editProfile'])->name('editProfile')->middleware('isLoggedIn');

Route::put('/update-profile/{id}', [UserController::class, 'updateProfile'])->name('updateProfile');
Route::get('/usersProfile', [UserController::class, 'usersProfileProfile'])->name('usersProfile')->middleware('role');;

Route::delete('/deleteUser/{id}', [UserController::class, 'deleteUser' ])->name('deleteUser');
Route::delete('/deleteMainUser/{id}', [UserController::class, 'deleteMainUser' ])->name('deleteMainUser');
Route::post('/makeAdmin/{id}', [UserController::class, 'makeAdmin' ])->name('makeAdmin');
Route::post('/makeUser/{id}', [UserController::class, 'makeUser' ])->name('makeUser');


// Route::get('/usersProfile', function () {
//     return view('dashboard/usersProfile');
// });




// Route::get('/search', 'ProfileSearchController@search')->name('searchProfiles');
Route::get('/search', [ProfileSearchController::class, 'search'])->name('search');
