<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('bridals', App\Http\Controllers\BridalController::class);
Route::resource('jewelleries', App\Http\Controllers\JewelleryController::class);
Route::resource('kids', App\Http\Controllers\KidController::class);
Route::resource('kings', App\Http\Controllers\KingController::class);
Route::resource('lingeries', App\Http\Controllers\LingerieController::class);
Route::resource('shoes', App\Http\Controllers\ShoeController::class);
Route::resource('wears', App\Http\Controllers\WearController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('permissions', App\Http\Controllers\PermissionController::class);