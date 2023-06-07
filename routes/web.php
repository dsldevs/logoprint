<?php

use App\Http\Controllers\СategoryController;
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

Auth::routes();


Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::prefix('admin')->group(function () {
        Route::resources([
            'category' => СategoryController::class,
        ]);
    });


});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
