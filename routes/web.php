<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index', [StoreController::class, 'index']);
Route::post('/create', [StoreController::class, 'create']);
Route::get('/edit/{id}', [StoreController::class, 'edit']);
Route::post('/update/{id}', [StoreController::class, 'update']);
Route::get('/delete/{id}', [StoreController::class, 'delete']);