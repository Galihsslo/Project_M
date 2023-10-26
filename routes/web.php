<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\SesiController;
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

Route::middleware(['guest'])->group(function () {

    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
});
// redirect
Route::get('home', function () {
    return redirect('/login');
});


// register

Route::get('register', [RegController::class, 'register'])->name('register');
Route::post('register', [RegController::class, 'actionregister']);


Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->group(function () {

    Route::get('admins', [AdminController::class, 'index'])->middleware('UserAkses:admin');
    Route::get('bendahara', [AdminController::class, 'bendahara'])->middleware('UserAkses:bendahara');
    Route::get('wali', [AdminController::class, 'wali'])->middleware('UserAkses:wali');
    // Route::get('admin', [AdminController::class, 'index']);
    Route::get('logout', [SesiController::class, 'logout']);
});
