<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\FasilitasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', [UserController::class, 'about'])->name('about');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// Normal Users Routes List
Route::middleware(['auth', 'user-access:tenant'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
});

// Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/apartments', [ApartmentController::class, 'index'])->name('admin.apartment.index'); 
    Route::get('/admin/apartments/create', [ApartmentController::class, 'create'])->name('admin.apartment.create');
    Route::post('/admin/apartments/store', [ApartmentController::class, 'store'])->name('admin.apartments.store');
    Route::get('/admin/apartments/show/{id}', [ApartmentController::class, 'show'])->name('admin.apartment.show'); 
    Route::get('/admin/apartments/edit/{id}', [ApartmentController::class, 'edit'])->name('admin.apartment.edit');
    Route::put('/admin/apartments/edit/{id}', [ApartmentController::class, 'update'])->name('admin.apartment.update');
    Route::delete('/admin/apartments/destroy/{id}', [ApartmentController::class, 'destroy'])->name('admin.apartment.destroy');
    
    Route::get('/admin/fasilitasApart', [FasilitasController::class, 'index'])->name('admin.fasilitas.index');
    Route::get('/admin/fasilitasApart/show/{id}', [FasilitasController::class, 'show'])->name('admin.fasilitas.show');
    Route::get('/admin/fasilitasApart/edit/{id}', [FasilitasController::class, 'edit'])->name('admin.fasilitas.edit');
    Route::delete('/admin/fasilitasApart/destroy/{id}', [FasilitasController::class, 'destroy'])->name('admin.fasilitas.destroy');


    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
});
