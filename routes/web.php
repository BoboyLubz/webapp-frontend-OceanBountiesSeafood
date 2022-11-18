<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);

Route::get('/login', [PagesController::class, 'login']);

Route::get('/password', [PagesController::class, 'password']);

Route::get('/register', [PagesController::class, 'register']);

Route::get('/adminPage', [PagesController::class, 'adminPage']);

Route::get('/announcement', [PagesController::class, 'announcement']);

Route::get('/inbox', [PagesController::class, 'inbox']);

