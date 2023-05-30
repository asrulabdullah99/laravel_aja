<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\KehadiranController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('admin/dashboard_admin');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::controller(UserController::class)->name('user.')->group(function () {
    Route::get('/user/view', 'getUser')->name('getUser');
    Route::get('/user/tambah', 'tambah')->name('tambah');
    Route::get('/user/edit/{user}', 'edit')->name('edit');
    Route::post('/user/simpan', 'saveUser')->name('saveUser');
    Route::patch('/user/update/{user}', 'updateUser')->name('updateUser');
    Route::delete('/user/hapus/{user}', 'deleteUser')->name('deleteUser');
});

Route::controller(JabatanController::class)->name('jabatan.')->group(function () {
    Route::get('/jabatan/view', 'getJabatan')->name('getJabatan');
    Route::get('/jabatan/tambah', 'tambah')->name('tambah');
    Route::get('/jabatan/edit/{jabatan}', 'edit')->name('edit');
    Route::post('/jabatan/simpan', 'saveJabatan')->name('saveJabatan');
    Route::patch('/jabatan/update/{jabatan}', 'updateJabatan')->name('updateJabatan');
    Route::delete('/jabatan/hapus/{jabatan}', 'deleteJabatan')->name('deleteJabatan');
});

Route::controller(KehadiranController::class)->name('kehadiran.')->group(function () {
    Route::get('/kehadiran/view', 'getKehadiran')->name('getKehadiran');
    Route::get('/kehadiran/tambah', 'tambah')->name('tambah');
    Route::get('/kehadiran/edit/{kehadiran}', 'edit')->name('edit');
    Route::post('/kehadiran/simpan', 'saveKehadiran')->name('saveKehadiran');
    Route::patch('/kehadiran/update/{kehadiran}', 'updateKehadiran')->name('updateKehadiran');
    Route::delete('/kehadiran/hapus/{kehadiran}', 'deleteKehadiran')->name('deleteKehadiran');
});
