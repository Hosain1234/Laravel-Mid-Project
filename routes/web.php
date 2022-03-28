<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentHomeController;

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
    return view('homepage');
});
Route::get('/login', [HomeController::class,'login'])->name('login');
Route::post('/login', [HomeController::class,'loginSubmit'])->name('loginSubmit');
Route::get('/registration', [HomeController::class,'registration'])->name('registration');
Route::post('/registration', [HomeController::class,'regSubmit'])->name('regSubmit');
Route::get('/student/home',[StudentHomeController::class,'home'])->name('home.student');
Route::get('/student/prereg',[StudentHomeController::class,'prereg'])->name('student.prereg');
Route::post('/student/prereg/modify',[StudentHomeController::class,'preregModify'])->name('student.prereg.modify');