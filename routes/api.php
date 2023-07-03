<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::middleware(['auth:sanctum'])->group(function () {
    Route::controller(UserController::class)->name('user.')->group(function () {
        Route::get('/user/view', 'getUser')->name('getUser');
        Route::get('/user/tambah', 'tambah')->name('tambah');
        Route::get('/user/edit/{user}', 'edit')->name('edit');
        Route::post('/user/simpan', 'saveUser')->name('saveUser');
        Route::patch('/user/update/{user}', 'updateUser')->name('updateUser');
        Route::delete('/user/hapus/{user}', 'deleteUser')->name('deleteUser');
    });
});
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
