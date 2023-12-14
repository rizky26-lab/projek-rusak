<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RayonsController;
use App\Http\Controllers\RombelsController;
use App\Http\Controllers\StudentsController;

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
    return view('home');
})->name('home.page');

Route::prefix('/')->name('index.')->group(function(){
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    });

Route::prefix('/rombel')->name('rombel.')->group(function(){
    Route::get('/', [RombelsController::class, 'index'])->name('index');
    Route::get('/create', [RombelsController::class, 'create'])->name('create');
    Route::post('/store', [RombelsController::class, 'store'])->name('store');
    Route::get('/{id}', [RombelsController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [RombelsController::class, 'update'])->name('update');
    Route::delete('/{id}', [RombelsController::class, 'destroy'])->name('delete');
    });

Route::prefix('/rayon')->name('rayon.')->group(function() {
    Route::get('/', [RayonsController::class, 'index'])->name('index');
    Route::get('/create', [RayonsController::class, 'create'])->name('create');
    Route::patch('/store', [RayonsController::class, 'store'])->name('store');
    });

Route::prefix('/student')->name('student.')->group(function(){
    Route::get('/', [StudentsController::class, 'index'])->name('index');
    Route::get('/create', [StudentsController::class, 'create'])->name('create');
    Route::patch('/store', [StudentsController::class, 'store'])->name('store');
});

Route::prefix('/user')->name('user.')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::patch('/store', [UserController::class, 'store'])->name('store');
});

