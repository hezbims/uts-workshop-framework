<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    "/halaman_utama" ,
    [ContactController::class , 'goToHalamanUtama']
);

Route::delete(
    "/delete_data/{contact}",
    [ContactController::class , 'deleteData']
);


Route::get(
    '/halaman_edit/{contact}',
    [ContactController::class , 'goToEditData']
);
Route::put(
    '/save_edit_data' ,
    [ContactController::class , 'saveEditData']
);


Route::get(
    '/halaman_tambah_data',
    [ContactController::class , 'goToHalamanTambahData']
);
Route::post(
    '/tambah_data',
    [ContactController::class , 'tambahData']
);

