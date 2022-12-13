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

Route::get('/login', [App\Http\Controllers\LoginController::class, 'loginview'])->name('loginview');

Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('/adminhome', [App\Http\Controllers\AdminController::class, 'adminDashboard'])->name('admin.home')->middleware('is_admin');

Route::get('/add_category', [App\Http\Controllers\AdminController::class, 'addcategoryform'])->name('admin.addcategoryform')->middleware('is_admin');

Route::post('/add_category', [App\Http\Controllers\AdminController::class, 'addcategory'])->name('admin.addcategory')->middleware('is_admin');

Route::get('/add_subcategory', [App\Http\Controllers\AdminController::class, 'addsubcategoryform'])->name('admin.addsubcategoryform')->middleware('is_admin');

Route::post('/add_subcategory', [App\Http\Controllers\AdminController::class, 'addsubcategory'])->name('admin.addsubcategory')->middleware('is_admin');