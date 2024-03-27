<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SiswaController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {  
    return view("home");
});

Route::get("/dashboard", function () {
    return view("dashboard");
})->middleware("auth");

// route login
Route::get("/login",[AuthController::class,"login"])->name("login")->middleware("guest");
Route::post('/login', [AuthController::class, 'aksilogin'])->name('aksilogin')->middleware('guest');
// logout 
Route::get('/logout',[AuthController::class,'logout'])->name('logout')->middleware(['auth']);


// siswa
Route::get('/siswa',[SiswaController::class,'index'])->name('siswa')->middleware(['auth']);

Route::get('/add', [SiswaController::class, 'create'])->name('create')->middleware(['auth','admin']);// add data
Route::post('siswa', [SiswaController::class, 'store'])->middleware(['auth','admin']);// Route untuk menyimpan data siswa yang ditambahkan

Route::get('/edit/{id}', [SiswaController::class, 'Edit'])->name('Edit')->middleware(['auth','admin']);
Route::put('/siswa/{id}', [SiswaController::class, 'Update'])->name('Update')->middleware(['auth','admin']);



// kelas 
Route::get('/class',[ClassController::class,'index'])->name('class')->middleware(['auth']);


Route::get('/siswa-delete/{id}',[SiswaController::class,'Delete'])->name('Delete')->middleware(['auth','admin']);  
Route::delete('siswa-delete/{id}',[SiswaController::class,'Destroy'])->name('Delete.Destroy')->middleware(['auth','admin']);


Route::get('/restore' , [SiswaController::class,'deleteSiswa'])->name('deleteSiswa')->middleware(['auth','admin']);

Route::get('/siswa/{id}/restore', [SiswaController::class,'restore'])->middleware(['auth','admin']);

Route::delete('/siswa/{id}/forceDelete', [SiswaController::class,'forceDeleteStudent'])->middleware(['auth','admin']);