<?php

use App\Http\Controllers\ContactController;
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

Route::view('/', 'home')->name('home');
Route::post('/send_contact', [ContactController::class, 'send_contact'])->name('send_contact');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contact/detail/{contact:slug}', [ContactController::class, 'contact_detail'])->name('gdetail');
Route::get('/search', [ContactController::class, 'search_contact'])->name('search');
