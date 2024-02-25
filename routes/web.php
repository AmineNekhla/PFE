<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/store', [HomeController::class, 'store'])->name('store');

Route::get('/',[ HomeController::class , "registrer"])->name('registrer');
Route::post('/registrer',[ HomeController::class , "registrerPost"])->name('registrer');
Route::get('/login',[ HomeController::class , "login"])->name('login');
Route::post('/login',[ HomeController::class , "loginPost"])->name('login');
Route::get('/logout',[ HomeController::class , "logout"])->name('logout');
Route::get('/test',[HomeController::class,"test"])->name(("test"));
Route::get('/service',[HomeController::class,"service"])->name('service');