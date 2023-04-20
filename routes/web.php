<?php

use App\Http\Controllers\RestAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RestAdminController;

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

Route::get('/',[PublicController::class, 'home'])->name('homePage');


Route::get('/create-restaurant', [PublicController::class, 'createRestaurant'])->name('createRestaurant');


Route::get('/ristorante/home/', [RestAdminController::class, 'indexRestaurant'])->middleware('isRestAdmin')->name('restaurant.index');

Route::get('/richiesta-ristoratore', [RestAdminController::class, 'becomeRestAdmin'])->middleware('auth')->name('becomeRestAdmin');

Route::get('/rendi-ristoratore/{user}', [RestAdminController::class, 'makeRestAdmin'])->name('makeRestAdmin');

