<?php

use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\karyawanController;
use App\Models\departments;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testsController;

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
    return view('home');
});

Route::get('/departments/data', [DepartmentsController::class,'data'])->name('departments.data');
Route::resource('/departments',DepartmentsController::class);

Route::get('/karyawans/data', [karyawanController::class,'data'])->name('karyawans.data');
Route::resource('/karyawans',karyawanController::class);


Route::get('/tests', [testsController::class,'index'])->name('tests.index');
Route::post('tests', [testsController::class,'store']);
