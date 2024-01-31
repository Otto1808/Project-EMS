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

Route::view('employee', 'admin.create');

Route::get('department/create', [App\Http\Controllers\DepartmentController::class, 'create'])->name('department.create');
Route::get('department/index', [App\Http\Controllers\DepartmentController::class, 'index'])->name('department.index');
Route::post('department/store', [App\Http\Controllers\DepartmentController::class, 'store'])->name('departments.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
