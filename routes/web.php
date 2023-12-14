<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;

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

// Viewing main pages
Route::get('/index',[ViewController::class,'index'])->name('home');
Route::get('/blog_post',[MainController::class,'blog'])->name('blog');
Route::get('/gallery',[MainController::class,'gallery'])->name('gallery');
Route::get('/contact',[MainController::class,'contact'])->name('contact');
Route::get('/about',[MainController::class,'about'])->name('about');
Route::get('/login',[MainController::class,'login']);
Route::get('/',[MainController::class,'signup']);
//Login, Logout and create account
Route::post('/signup',[AuthController::class,'account'])->name('signup');
Route::post('/login',[AuthController::class,'loginPost'])->name('loginuser');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
//Categories 
// Route::get('/index',[ViewController::class,'home'])->name('home');