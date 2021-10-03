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
        //Dashboard
        Route::view('/admin/dashboard', 'admin/dashboard')->name('adm_dashboard');
        //Manage Users
        Route::get('/admin/pesandata', [AdminController::class, 'pesandata'])->name('tablepesan');
        Route::get('/admin/pesandata/{user}', [AdminController::class, 'pesandetail'])->name('pesandetail');
        Route::get('/admin/ccdata', [AdminController::class, 'ccdata'])->name('tablecc');
        Route::get('/admin/ccdata/{user}', [AdminController::class, 'ccdetail'])->name('ccdetail');
        Route::view('/admin/ccedit', 'admin/ccedit')->name('ccedit');
        Route::get('/admin/userdata', [AdminController::class, 'userdata'])->name('tableuser');
        Route::get('/admin/userdata/{user}', [AdminController::class, 'userdetail'])->name('userdetail');
        Route::get('/admin/userdata/useredit/{user}', [AdminController::class, 'edituser'])->name('useredit');
        Route::post('/admin/userdata/actionedit/{user}', [AdminController::class, 'actedit'])->name('actedit');
        Route::post('/admin/userdata/actionpass/{user}', [AdminController::class, 'actpassmod'])->name('actpass');
        //Contact Data
        Route::get('/admin/contactdata', [AdminController::class, 'panel'])->name('tablecontact');
        Route::view('/admin/contactdata/inputcontact', 'admin/inputcontact')->name('inputcontact');
        Route::view('/admin/contactdata/contactedit', 'admin/contactedit')->name('contactedit');
        Route::get('/admin/contactdata/{contact:slug}', [AdminController::class, 'detailcontact'])->name('detailcontact');
    });
    Route::group(['middleware' => ['rolesys:user']], function () {

        Route::view('/user/dashboard', 'dashboard')->name('usr_dashboard');
    });
});

require_once 'auth.php';
