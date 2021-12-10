<?php

use App\Http\Controllers\front\AdminController;
use App\Http\Controllers\front\DashboardiController;
use App\Http\Controllers\front\DashboardiiController;
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

// Route::get('/', [AdminController::class, 'show']);
Route::get('/dashboard', [AdminController::class, 'edit'])->name('admin.master');
Route::get('/index', [DashboardiController::class, 'index'])->name('admin.pages.dash_1');
Route::get('/dataset', [DashboardiiController::class, 'index'])->name('admin.pages.dash_2');
