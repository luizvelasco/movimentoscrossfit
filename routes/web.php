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

use App\Http\Controllers\MovimentController;
use Laravel\Jetstream\Rules\Role;

Route::get('/', [MovimentController::class, 'index']);
Route::get('/moviments/create', [MovimentController::class, 'create'])->middleware('auth');
Route::get('/moviments/{id}', [MovimentController::class, 'show']);
Route::post('/moviments', [MovimentController::class, 'store']);
Route::delete('moviments/{id}', [MovimentController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard', [MovimentController::class, 'dashboard'])->middleware('auth');
Route::get('moviments/edit/{id}', [MovimentController::class, 'edit'])->middleware('auth');
Route::put('moviments/update/{id}', [MovimentController::class, 'update'])->middleware('auth');

