<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::get('/login', [AuthController::class, 'index'])->name('index');
Route::post('/sign-in', [AuthController::class, 'login'])->name('sign-in');

Route::group(['middleware' => 'authadmin'], function () {
    Route::get('/edit', [DashboardController::class, 'edit'])->name('edit');
});
