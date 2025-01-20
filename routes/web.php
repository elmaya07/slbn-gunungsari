<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CommentController;
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

Route::get('/', [WelcomeController::class,'index']);

Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/login/process', [AuthController::class,'login']);

Route::get('/api/comments', [CommentController::class, 'index']);
Route::post('/api/comments', [CommentController::class, 'store']);



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/slider', [SliderController::class,'index'])->name('slider-show');
    Route::get('/slider/create', [SliderController::class,'create'])->name('slider-create');
    Route::post('/slider/store', [SliderController::class,'store'])->name('slider-store');
    Route::get('/slider/edit/{id}', [SliderController::class,'edit'])->name('slider-edit');
    Route::post('/slider/update/{id}', [SliderController::class,'update'])->name('slider-update');
    Route::get('/slider/delete/{id}', [SliderController::class,'delete'])->name('slider-delete');

    Route::get('/galeri', [GaleriController::class,'index'])->name('galeri-show');
    Route::get('/galeri/create', [GaleriController::class,'create'])->name('galeri-create');
    Route::post('/galeri/store', [GaleriController::class,'store'])->name('galeri-store');
    Route::get('/galeri/edit/{id}', [GaleriController::class,'edit'])->name('galeri-edit');
    Route::post('/galeri/update/{id}', [GaleriController::class,'update'])->name('galeri-update');
    Route::get('/galeri/delete/{id}', [GaleriController::class,'delete'])->name('galeri-delete');

    Route::get('/videos', [VideoController::class,'index'])->name('video-show');
    Route::get('/video/create', [VideoController::class,'create'])->name('video-create');
    Route::post('/video/store', [VideoController::class,'store'])->name('video-store');
    Route::get('/video/edit/{id}', [VideoController::class,'edit'])->name('video-edit');
    Route::post('/video/update/{id}', [VideoController::class,'update'])->name('video-update');
    Route::get('/video/delete/{id}', [VideoController::class,'delete'])->name('video-delete');

});