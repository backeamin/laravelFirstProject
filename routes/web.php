<?php

use App\Http\Controllers\BestController;
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


Route::get('/',[BestController::class, 'index'])->name('index');
Route::Post('/create_user',[BestController::class, 'createUser'])->name('createUser');
Route::get('/user_list',[BestController::class, 'userList'])->name('userList');
Route::get('/view_user/{id}',[BestController::class, 'viewUser'])->name('viewUser');
Route::get('/update_user/{id}',[BestController::class, 'updateUser'])->name('updateUser');
Route::get('/delete_user/{id}',[BestController::class, 'deleteUser'])->name('deleteUser');
Route::post('/update_user',[BestController::class, 'updateUserSuccessFully'])->name('updateUserSuccessFully');
