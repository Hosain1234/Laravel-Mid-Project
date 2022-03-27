<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return "<a href='/login'>Login</a><br><a href='/registration'>Registration</a>";
});
Route::get('/login', [HomeController::class,'login'])->name('login');
Route::get('/registration', [HomeController::class,'registration'])->name('registration');
Route::post('/registration', [HomeController::class,'regSubmit'])->name('regSubmit');