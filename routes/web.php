<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
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

Route::get('/', [UsersController::class, 'index'])->name('login');
Route::get('login', [UsersController::class, 'index'])->name('login');
Route::post('loginAuth', [UsersController::class, 'loginAuth'])->name('loginAuth');
Route::get('/dashborad', [UsersController::class, 'dashborad'])->name('dashborad');
Route::get('/List-of-invoice', [UsersController::class, 'newItem'])->name('List-of-invoice');
Route::get('/New-invoice', [UsersController::class, 'addBill'])->name('New-invoice');
Route::get('/singOut', [UsersController::class, 'singOut'])->name('singOut');
Route::get('GetItems', [UsersController::class, 'getItemNames'])->name('GetItems');
