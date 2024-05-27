<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\KontrakController;

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
    Route::get('/admin/fasilitasApart/create', [FasilitasController::class, 'create'])->name('admin.fasilitas.create');
    Route::post('/admin/fasilitasApart/store', [FasilitasController::class, 'store'])->name('admin.fasilitas.store');
    Route::get('/admin/fasilitasApart/show/{id}', [FasilitasController::class, 'show'])->name('admin.fasilitas.show');
    Route::get('/admin/fasilitasApart/edit/{id}', [FasilitasController::class, 'edit'])->name('admin.fasilitas.edit');
    Route::put('/admin/fasilitasApart/edit/{id}', [FasilitasController::class, 'update'])->name('admin.fasilitas.update');
    Route::delete('/admin/fasilitasApart/destroy/{id}', [FasilitasController::class, 'destroy'])->name('admin.fasilitas.destroy');

    Route::get('/admin/units', [UnitController::class, 'index'])->name('admin.unit.index');
    Route::get('/admin/units/create', [UnitController::class, 'create'])->name('admin.unit.create');
    Route::post('/admin/units/store', [UnitController::class, 'store'])->name('admin.unit.store');
    Route::get('/admin/units/show/{id}', [UnitController::class, 'show'])->name('admin.unit.show');
    Route::get('/admin/units/edit/{id}', [UnitController::class, 'edit'])->name('admin.unit.edit');
    Route::put('/admin/units/edit/{id}', [UnitController::class, 'update'])->name('admin.unit.update');
    Route::delete('/admin/units/destroy/{id}', [UnitController::class, 'destroy'])->name('admin.unit.destroy');

    Route::get('/admin/tenant', [PenyewaController::class, 'index'])->name('admin.penyewa.index');
    Route::get('/admin/tenant/create', [PenyewaController::class, 'create'])->name('admin.penyewa.create');
    Route::post('/admin/tenant/store', [PenyewaController::class, 'store'])->name('admin.penyewa.store');
    Route::get('/admin/tenant/show/{id}', [PenyewaController::class, 'show'])->name('admin.penyewa.show');
    Route::get('/admin/tenant/edit/{id}', [PenyewaController::class, 'edit'])->name('admin.penyewa.edit');
    Route::put('/admin/tenant/edit/{id}', [PenyewaController::class, 'update'])->name('admin.penyewa.update');
    Route::delete('/admin/tenant/destroy/{id}', [PenyewaController::class, 'destroy'])->name('admin.penyewa.destroy');

    Route::get('/admin/payment', [PembayaranController::class, 'index'])->name('admin.pembayaran.index');
    Route::get('/admin/payment/create', [PembayaranController::class, 'create'])->name('admin.pembayaran.create');
    Route::post('/admin/payment/store', [PembayaranController::class, 'store'])->name('admin.pembayaran.store');
    Route::get('/admin/payment/show/{id}', [PembayaranController::class, 'show'])->name('admin.pembayaran.show');
    Route::get('/admin/payment/edit/{id}', [PembayaranController::class, 'edit'])->name('admin.pembayaran.edit');
    Route::put('/admin/payment/edit/{id}', [PembayaranController::class, 'update'])->name('admin.pembayaran.update');
    Route::delete('/admin/payment/destroy/{id}', [PembayaranController::class, 'destroy'])->name('admin.pembayaran.destroy');

    Route::get('admin/kontrak', [KontrakController::class, 'index'])->name('admin.kontrak.index');
    Route::get('admin/kontrak/create', [KontrakController::class, 'create'])->name('admin.kontrak.create');
    Route::post('admin/kontrak', [KontrakController::class, 'store'])->name('admin.kontrak.store');
    Route::get('admin/kontrak/{id}', [KontrakController::class, 'show'])->name('admin.kontrak.show');
    Route::get('admin/kontrak/{id}/edit', [KontrakController::class, 'edit'])->name('admin.kontrak.edit');
    Route::put('admin/kontrak/{id}', [KontrakController::class, 'update'])->name('admin.kontrak.update');
    Route::delete('admin/kontrak/{id}', [KontrakController::class, 'destroy'])->name('admin.kontrak.destroy');

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
});
