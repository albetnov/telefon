<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
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
    Route::get('/contact/detail/{contact:slug}', [ContactController::class, 'contact_detail'])->name('gdetail');
    Route::get('/search', [ContactController::class, 'search_contact'])->name('search');
    Route::group(['middleware' => ['rolesys:admin']], function () {

        Route::view('/admin/dashboard', 'dashboard')->name('adm_dashboard');
        Route::get('/admin/contactdata', [AdminController::class, 'panel'])->name('tablecontact');
        Route::view('/admin/contactdata/inputcontact', 'inputcontact')->name('inputcontact');
        Route::view('/admin/contactdata/contactedit', 'contactedit')->name('contactedit');
        Route::get('/admin/contactdata/{contact:slug}', [AdminController::class, 'detailcontact'])->name('detailcontact');
    });
    Route::group(['middleware' => ['rolesys:user']], function () {

        Route::view('/user/dashboard', 'dashboard')->name('usr_dashboard');
    });
});

require_once 'auth.php';
