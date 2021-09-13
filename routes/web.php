<?php

use App\Http\Controllers\ContactController;
use App\Models\Contact;
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
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contact/detail/{contact:slug}', [ContactController::class, 'contact_detail'])->name('gdetail');
