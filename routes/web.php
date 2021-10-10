<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
        // Route::view('/admin/dashboard', 'admin/dashboard')->name('adm_dashboard');
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('adm_dashboard');
        Route::post('/admin/edit/current/{user}', [AdminController::class, 'editcuracc'])->name('editcuracc');
        //Manage Pesan
        Route::get('/admin/pesan', [AdminController::class, 'pesandata'])->name('tablepesan');
        Route::get('/admin/pesan/detail/{cscontact}', [AdminController::class, 'pesandetail'])->name('pesandetail');
        Route::post('/admin/pesan/actiondel/{cscontact}', [AdminController::class, 'delpesan'])->name('delpesan');
        //Manage Country Code
        Route::view('/admin/country_code/add', 'admin.addcc')->name('addcc');
        Route::post('/admin/country_code/actionadd', [AdminController::class, 'actadd_cc'])->name('actaddcc');
        Route::get('/admin/country_code', [AdminController::class, 'ccdata'])->name('tablecc');
        Route::get('/admin/country_code/edit/{cc}', [AdminController::class, 'ccedit'])->name('ccedit');
        Route::post('/admin/country_code/actionedit/{cc}', [AdminController::class, 'actedit_cc'])->name('actccedit');
        Route::post('/admin/country_code/actiondel/{cc}', [AdminController::class, 'actdel_cc'])->name('actdelcc');
        //Manage Users
        Route::get('/admin/user', [AdminController::class, 'userdata'])->name('tableuser');
        Route::get('/admin/user/detail/{user}', [AdminController::class, 'userdetail'])->name('userdetail');
        Route::get('/admin/user/useredit/{user}', [AdminController::class, 'edituser'])->name('useredit');
        Route::post('/admin/user/actionedit/{user}', [AdminController::class, 'actedit'])->name('actedit');
        Route::post('/admin/user/actionpass/{user}', [AdminController::class, 'actpassmod'])->name('actpass');
        Route::post('/admin/user/actiondel/{user}', [AdminController::class, 'deluser'])->name('deluser');
        //Contact Data
        Route::get('/admin/contact', [AdminController::class, 'panel'])->name('tablecontact');
        Route::get('/admin/contact/create', [AdminController::class, 'create_contact'])->name('inputcontact');
        Route::post('/admin/contact/actioncreate', [AdminController::class, 'save_contact'])->name('actct');
        Route::get('/admin/contact/edit/{contact:slug}', [AdminController::class, 'edit_view'])->name('contactedit');
        Route::post('/admin/contact/actionedit/{contact:slug}', [AdminController::class, 'edit_contact'])->name('edc');
        Route::get('/admin/contact/detail/{contact:slug}', [AdminController::class, 'detailcontact'])->name('detailcontact');
        Route::post('/admin/contact/actiondelete/{contact:slug}', [AdminController::class, 'del_contact'])->name('delc');
        //Verification Data
        Route::get('/admin/verifikasi', [AdminController::class, 'verifikasidata'])->name('tableverifikasi');
    });
    Route::group(['middleware' => ['rolesys:user']], function () {
        //Dashboard
        Route::view('/user/dashboard', 'user.dashboard')->name('usr_dashboard');
        Route::get('/user/verify', [UserController::class, 'showverify'])->name('usrverify');
        Route::post('/user/verify', [UserController::class, 'store_verify'])->name('usrsaveverify');
        Route::post('/user/verify/{requestverify}', [UserController::class, 'del_verify'])->name('usrdelreq');
        // Route::view('/user/verify', 'user.dataverifikasi')->name('dataverifikasi');
        //Manage Contact that created by himself
        Route::resource('user/contact', UserController::class)->scoped(['contact' => 'slug'])->names([
            'index' => 'usrtablecontact',
            'show' => 'usrdetailcontact',
            'create' => 'usrinputcontact',
            'store' => 'usrstorecontact',
            'update' => 'usrupdatecontact',
            'edit' => 'usrcontactedit',
            'destroy' => 'usrdeletecontact'
        ]);
    });
});

require_once 'auth.php';
