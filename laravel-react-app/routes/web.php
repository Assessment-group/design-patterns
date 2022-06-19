<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('projects/add', [ProjectController::class, 'insert']);
Route::post('projects', [ProjectController::class, 'store']);
Route::get('projects/show/{id}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('projects/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('projects/edit/{id}', [ProjectController::class, 'update'])->name('update');
Route::delete('projects/show/{id}', [ProjectController::class, 'destroy'])->name('destroy');


Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
