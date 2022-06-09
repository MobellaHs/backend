<?php

use App\Http\Controllers\CadastraController;
use App\Http\Controllers\ChipsController;
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

Route::get('/chips', [ChipsController::class, 'index']);
Route::post('/chips', [ChipsController::class, 'store']);
