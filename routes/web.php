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

//show
Route::get('/', [App\Http\Controllers\CRUD_Controller::class, 'index'])->name('show');
//delete
Route::get('/delete/{id}', [App\Http\Controllers\CRUD_Controller::class, 'Delete']);
//add
Route::get('create', [App\Http\Controllers\CRUD_Controller::class, 'create']);
Route::post('create', [App\Http\Controllers\CRUD_Controller::class, 'store']);
//edit
Route::get('/update/{id}', [App\Http\Controllers\CRUD_Controller::class, 'edit']);
Route::post('/update/{id}', [App\Http\Controllers\CRUD_Controller::class, 'update']);

Route::get('/edit', [App\Http\Controllers\CRUD_Controller::class, 'create']);
