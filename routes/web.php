<?php

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

Route::get('/test', function () {
    return view('admin.share.master');
});
Route::get('/admin/category/create', [\App\Http\Controllers\CategoryController::class, 'create']);
Route::post('/admin/category/create', [\App\Http\Controllers\CategoryController::class, 'store'])->name('category.Create');
