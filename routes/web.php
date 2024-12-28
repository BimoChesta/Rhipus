<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiAdminController;
use App\Http\Controllers\TransaksiController;
use App\Http\Middleware\AuthMiddleware;
use App\Models\User;

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

// Authentication Routes
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'login'])->name('login');

Route::get('/daftar', [daftarController::class, 'index'])->name('showDaftarForm');
Route::post('/daftar', [daftarController::class, 'register'])->name('daftar');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes
// Route::get('/daftar', [DaftarController::class, 'index'])->name('register.index');
// Route::post('/daftar', [DaftarController::class, 'register'])->name('register.store');

// Authenticated Routes
Route::middleware(AuthMiddleware::class)->group(function () {
    Route::get('/', [videoController::class, 'index'])->name('beranda');

    // Video Routes
    Route::prefix('video')->name('video.')->group(function () {
        Route::get('/', [VideoController::class, 'index'])->name('index');
        Route::get('/create', [VideoController::class, 'create'])->name('create');
        Route::post('/', [VideoController::class, 'store'])->name('store');
        Route::get('/{id}', [VideoController::class, 'show'])->name('show');
        Route::post('/{id}/view', [VideoController::class, 'incrementViewCount'])->name('increment.view');
        Route::get('/unggah', [VideoController::class, 'unggah'])->name('unggah');
        Route::post('/unggah', [VideoController::class, 'unggahVideo'])->name('unggah.store');
    });

    // Profile Routes
    Route::prefix('profil')->name('profile.')->group(function () {
        Route::get('/', [ProfilController::class, 'index'])->name('index');
        Route::get('/create', [ProfilController::class, 'create'])->name('create');
        Route::post('/', [ProfilController::class, 'store'])->name('store');
        Route::get('/edit', [ProfilController::class, 'edit'])->name('edit');
        Route::post('/update', [ProfilController::class, 'update'])->name('update');
        Route::get('/{id}', [ProfilController::class, 'show'])->name('show');
    });

    // User Profile Video Routes
    Route::prefix('profilVideo')->name('user.profile.')->group(function () {
        Route::get('/{id}', [UserController::class, 'show'])->name('show');
        Route::get('/{id}/view', function ($id) {
            $user = User::findOrFail($id);
            return view('profilVideo', compact('user'));
        })->name('view');
    });

    Route::get('/video', [videoController::class, 'index'])->name('video');
    Route::get('/video/{id}', [videoController::class, 'show'])->name('video.show');
    Route::get('/unggah', [videoController::class, 'unggah'])->name('video');
    Route::post('/unggah', [videoController::class, 'unggahVideo'])->name('video.store');
    Route::get('/video/create', [videoController::class, 'create']);
    Route::post('/video', [videoController::class, 'store']);
    Route::post('/video/{id}/view', [VideoController::class, 'incrementViewCount']);

    Route::get('/profil', [profilController::class, 'index'])->name('profil');
    Route::get('/profil/create', [profilController::class, 'create']);
    Route::post('/profil', [profilController::class, 'store']);
    Route::get('/editProfil', [profilController::class, 'show'])->name('profile.show');
    Route::post('/profile', [profilController::class, 'update'])->name('profile.update');

    // Bank Sampah Routes
    Route::get('/', [TransaksiController::class, 'index'])->name('home');
Route::POST('/addTocart', [TransaksiController::class, 'addTocart'])->name('addTocart');
Route::POST('/storePelanggan', [UserController::class, 'storePelanggan'])->name('storePelanggan');
Route::POST('/login_pelanggan', [UserController::class, 'loginProses'])->name('loginproses.pelanggan');
Route::GET('/logout_pelanggan', [UserController::class, 'logout'])->name('logout.pelanggan');

Route::get('/shop', [Controller::class, 'shop'])->name('shop');
Route::get('/transaksi', [Controller::class, 'transaksi'])->name('transaksi');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');

Route::get('/checkout', [Controller::class, 'checkout'])->name('checkout');
Route::POST('/checkout/proses/{id}', [Controller::class, 'prosesCheckout'])->name('checkout.product');
Route::POST('/checkout/prosesPembayaran', [Controller::class, 'prosesPembayaran'])->name('checkout.bayar');
Route::get('/checkOut', [Controller::class, 'keranjang'])->name('keranjang');
Route::get('/checkOut/{id}', [Controller::class, 'bayar'])->name('keranjang.bayar');


Route::get('/admin', [Controller::class, 'login'])->name('login');
Route::POST('/admin/loginProses', [Controller::class, 'loginProses'])->name('loginProses');


Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [Controller::class, 'admin'])->name('admin');
    Route::get('/admin/product', [ProductController::class, 'index'])->name('product');
    Route::get('/admin/logout', [Controller::class, 'logout'])->name('logout');
    Route::get('/admin/report', [Controller::class, 'report'])->name('report');
    Route::get('/admin/addModal', [ProductController::class, 'addModal'])->name('addModal');

    Route::GET('/admin/user_management', [UserController::class, 'index'])->name('userManagement');
    Route::GET('/admin/user_management/addModalUser', [UserController::class, 'addModalUser'])->name('addModalUser');
    Route::POST('/admin/user_management/addData', [UserController::class, 'store'])->name('addDataUser');
    Route::get('/admin/user_management/editUser/{id}', [UserController::class, 'show'])->name('showDataUser');
    Route::PUT('/admin/user_management/updateDataUser/{id}', [UserController::class, 'update'])->name('updateDataUSer');
    Route::DELETE('/admin/user_management/deleteUSer/{id}', [UserController::class, 'destroy'])->name('destroyDataUser');

    Route::POST('/admin/addData', [ProductController::class, 'store'])->name('addData');
    Route::GET('/admin/editModal/{id}', [ProductController::class, 'show'])->name('editModal');
    Route::PUT('/admin/updateData/{id}', [ProductController::class, 'update'])->name('updateData');
    Route::DELETE('/admin/deleteData/{id}', [ProductController::class, 'destroy'])->name('deleteData');

    Route::GET('/admin/transaksi', [TransaksiAdminController::class, 'index'])->name('transaksi.admin');
});

    // Settings Routes
    Route::prefix('pengaturan')->name('settings.')->group(function () {
        Route::get('/', [PengaturanController::class, 'index'])->name('index');
        Route::delete('/deleteAkun', [PengaturanController::class, 'delete'])->name('delete');
    });

    // Owner-specific Routes
    Route::middleware('owner')->group(function () {
        Route::get('/profil/edit', [ProfilController::class, 'edit'])->name('profile.owner.edit');
        Route::get('/video/create', [VideoController::class, 'create'])->name('video.owner.create');
    });

    Route::get('/pengaturan', [pengaturanController::class, 'index'])->name('pengaturan');
    Route::delete('/deleteAkun', [pengaturanController::class, 'delete'])->name('deleteAccount');
});