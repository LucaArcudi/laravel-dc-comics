<?php

use App\Http\Controllers\Admin\ComicController as ComicController;
use App\Http\Controllers\Admin\HomeController as HomeController;
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

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/home', [HomeController::class, 'home'])->name('home');

    Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
    Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');
    Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
    Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comics.show');
});
