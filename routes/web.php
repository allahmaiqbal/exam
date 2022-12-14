<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {

    Route::prefix('dashboard')->name('dashboard.')->group(function () {

        Route::get('/', DashboardController::class)->name('index');
        Route::resource('post', PostController::class);
    });
});

require __DIR__ . '/auth.php';
