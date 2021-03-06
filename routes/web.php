<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AricleController;
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
    return view('welcome');
});


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard');
    Route::resource('/specialization', SpecializationController::class)->name('index', 'specialization');
    Route::resource('/doctor', DoctorController::class)->name('index', 'doctor');
    Route::resource('/user', UserController::class)->name('index', 'user');
    Route::resource('/aricles', AricleController::class)->name('index', 'aricle');

    Route::post('/upload', [UploadController::class, 'store']);
    Route::post('/avatar', [AvatarController::class, 'store']);
});
require __DIR__ . '/auth.php';
