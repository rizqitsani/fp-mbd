<?php

use App\Http\Controllers\ProductController;
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
})->name('home');

Route::prefix('products')->name('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('.index');
    Route::post('/', [ProductController::class, 'store'])->name('.store');
    Route::get('/create', [ProductController::class, 'create'])->name('.create');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('.edit');
    Route::get('/{id}', [ProductController::class, 'show'])->name('.show');
    Route::put('/{id}', [ProductController::class, 'update'])->name('.update');
    Route::delete('/{id}', [ProductController::class, 'delete'])->name('.delete');
});
