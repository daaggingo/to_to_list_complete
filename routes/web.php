<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoitemsController;

//Route::get('add-item', [TodoitemsController::class, 'create']);
//Route::post('add-item', [TodoitemsController ::class, 'store']);




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


//Route::get('/', [TodoitemsController::class, 'index']);
Route::resource('/', TodoitemsController::class);
Route::get('/about', [TodoitemsController::class, 'about']);
Route::get('/contact', [TodoitemsController::class, 'contact']);
//Route::get('/add-todoitem','TodoitemsController@create');
Route::get('add-todoitem', [TodoitemsController::class, 'create']);
Route::post('store-todoitem', [TodoitemsController::class, 'store']);
Route::get('/edit-todoitem/{id}', [TodoitemsController::class, 'edit']);
Route::put('/update-todoitem/{id}', [TodoitemsController::class, 'update']);
Route::get('/delete-todoitem/{id}', [TodoitemsController::class, 'delete']);
//Route::delete('/delete-todoitem/{id}', [TodoitemsController::class, 'delete']);





