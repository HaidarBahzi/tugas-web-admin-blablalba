<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\EkstraController;
use App\Http\Controllers\KelasController;

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

Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::get('/home', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);


Route::group(["prefix" => "/dashboard"], function () {
    Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

    Route::group(["prefix" => "/student"], function () {
        Route::get('/all', [StudentsController::class, 'index'])->middleware('auth');

        Route::get('/create', [StudentsController::class, 'create'])->middleware('auth');

        Route::post('/add', [StudentsController::class, 'store'])->middleware('auth');

        Route::delete('/delete/{id}', [StudentsController::class, 'destroy'])->middleware('auth');

        Route::get('/edit/{id}', [StudentsController::class, 'edit'])->middleware('auth');

        Route::post('/update/{id}', [StudentsController::class, 'update'])->middleware('auth');
    });

    Route::group(["prefix" => "/kelas"], function () {
        Route::get('/all', [KelasController::class, 'index'])->middleware('auth');

        Route::get('/create', [KelasController::class, 'create'])->middleware('auth');

        Route::post('/add', [KelasController::class, 'store'])->middleware('auth');

        Route::delete('/delete/{id}', [KelasController::class, 'destroy'])->middleware('auth');

        Route::get('/edit/{id}', [KelasController::class, 'edit'])->middleware('auth');

        Route::post('/update/{kelas}', [KelasController::class, 'update'])->middleware('auth');
    });
});

Route::get('/about', function () {
    return view("about", ["title" => "About", "nama" => "Haidar Bahzi", "kelas" => "11 PPLG-1", "foto" => "img/pfp.png"]);
});

Route::get('/ekstrakulikuler', [EkstraController::class, 'index']);

Route::group(["prefix" => "/student"], function () {
    Route::get('/all', [StudentsController::class, 'index']);
});

Route::group(["prefix" => "/kelas"], function () {
    Route::get('/all', [KelasController::class, 'index']);
});
