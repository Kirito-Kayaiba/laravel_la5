<?php

use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuanTriTinController;
use App\Http\Controllers\TinController;
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
Route::get('tin/ds',[TinController::class,'index']);
Route::get('/tin/them',[TinController::class,'them']);
Route::post('/tin/them',[TinController::class,'them_']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/tin/xoa/{id}',[TinController::class,'xoa']);
Route::get('/tin/capnhat/{id}',[TinController::class,'capnhat']);
Route::post('/tin/capnhat/{id}',[TinController::class,'capnhat_']);
Route::get('/quantritin', [QuanTriTinController::class, 'index']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/download',function (){
        return view('download');
    });
    Route::get('/quantri',function (){
        return view('quantri');
    })->middleware('auth','Quantri');
    Route::get('dl',function(){
        return view('download');
    })->middleware('auth.basic');
});

require __DIR__.'/auth.php';
