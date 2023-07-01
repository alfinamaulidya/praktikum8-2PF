<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();
Route::redirect('/' , '/login') ;
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate']);
Route::resource('employees', EmployeeController::class);
Route::get('profile', ProfileController::class)->name('profile');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
