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
Route::get('/create-dish/{restaurant}', [PublicController::class, 'createDish'])->name('createDish');



// MIDDLEWARE RESTAURANT ADMIN
Route::get('/richiesta-ristoratore', [RestAdminController::class, 'becomeRestAdmin'])->middleware('auth')->name('becomeRestAdmin');

Route::get('/rendi-ristoratore/{user}', [RestAdminController::class, 'makeRestAdmin'])->name('makeRestAdmin');

Route::get('/ristorante/home/{restaurant}', [RestAdminController::class, 'indexRestaurant'])->middleware('isRestAdmin')->name('restaurant.index');

Route::get('/ristorante/home/{restaurant}/menu',[RestAdminController::class, 'menu'])->name('menu');

// LATO USER CLIENTE
Route::get('/all-restaurants',[PublicController::class, 'indexRestaurants'])->name('indexRestaurants');






