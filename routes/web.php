<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\UserController;
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



Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login-user', [UserController::class, 'loginUser'])->name('login-user');


Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register-user', [UserController::class, 'registerUser'])->name('register-user');

Route::get('/logout', [UserController::class, "logout"]);

Route::get('/forget-password', [UserController::class, 'forgetPassword'])->name('forget-password');



Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('isLoggedIn');
// Dashboard 

// Route::get('/edit-profile', function () {
//     return view('dashboard/edit');
// });

// // Display the edit profile page
Route::get('/edit-profile', [UserController::class, 'editProfile'])->name('editProfile');

// // Update the user profile
Route::put('/update-profile', [UserController::class, 'updateProfile'])->name('updateProfile');
Route::get('/allUser', [UserController::class, 'allUserProfile'])->name('allUser');

Route::delete('/deleteUser/{id}', [UserController::class, 'deleteUser' ])->name('deleteUser');
Route::delete('/deleteMainUser/{id}', [UserController::class, 'deleteMainUser' ])->name('deleteMainUser');


// Route::get('/allUser', function () {
//     return view('dashboard/allUser');
// });