<?php

use App\Models\Category;
use App\Models\Restaurant;
use App\Http\Controllers\RestAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
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

// CREARE UN RISTORANTE E PIATTO
Route::get('/create-restaurant', [PublicController::class, 'createRestaurant'])->name('createRestaurant');
Route::get('/create-dish/{restaurant}', [PublicController::class, 'createDish'])->name('createDish');


// LATO USER CLIENTE
Route::get('/all-restaurants',[PublicController::class, 'indexRestaurants'])->name('indexRestaurants');

// MIDDLEWARE AUTH USER
Route::get('/ristorante/menu/{restaurant}',[PublicController::class, 'menu'])->middleware('auth')->name('menu');
Route::get('/ristorante/menu/{restaurant}/filtered/{category}/',[PublicController::class, 'dishesByCategory'])->middleware('auth')->name('dishesByCategory');
Route::get('/richiesta-ristoratore', [RestAdminController::class, 'becomeRestAdmin'])->middleware('auth')->name('becomeRestAdmin');

// MIDDLEWARE RESTAURANT ADMIN
Route::get('/rendi-ristoratore/{user}', [RestAdminController::class, 'makeRestAdmin'])->name('makeRestAdmin');
Route::get('/ristorante/profilo/{restaurant}', [RestAdminController::class, 'indexRestaurant'])->middleware('isRestAdmin')->name('restaurant.index');
    // CREARE UN RISTORANTE E PIATTO
    Route::get('/create-restaurant', [PublicController::class, 'createRestaurant'])->middleware('isRestAdmin')->name('createRestaurant');
    Route::get('/ristorante/{restaurant}/show-restaurant/{table}', [TableController::class, 'showRestaurant'])->name('showRestaurant');

    
    Route::get('/create-dish/{restaurant}', [PublicController::class, 'createDish'])->middleware('isRestAdmin')->name('createDish');
    
    Route::get('/create-table/{restaurant}', [TableController::class, 'createTable'])->middleware('isRestAdmin')->name('createTable');
    Route::post('/store-table', [TableController::class , 'storeTable'])->name('storeTable');
    


Route::post('/ristorante/add-to-table/{table}', [TableController::class, 'addToTable'])->middleware('auth')->name('addToTable');
Route::get('/ristorante/{restaurant}/all-tables', [TableController::class, 'allTables'])->name('allTables');
Route::get('/ristorante/', [TableController::class, 'showTable'])->name('showTable');






