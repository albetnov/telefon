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
Route::group(['middleware' => ['auth']], function () {
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/admin/contactdata', [ContactController::class, 'index'])->name('tablecontact');
    Route::get('/contact/detail/{contact:slug}', [ContactController::class, 'contact_detail'])->name('gdetail');
    Route::get('/search', [ContactController::class, 'search_contact'])->name('search');
    Route::group(['middleware' => ['rolesys:admin']], function () {

        Route::view('/admin/dashboard', 'dashboard')->name('adm_dashboard');
        Route::get('/admin/contactdata', [ContactController::class, 'panel'])->name('tablecontact');
    });
    Route::group(['middleware' => ['rolesys:user']], function () {

        Route::view('/user/dashboard', 'dashboard')->name('usr_dashboard');
    });
});

require_once 'auth.php';
