<?php

use App\Models\Category;
use App\Models\Restaurant;
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

Route::get('/ristorante/menu/{restaurant}',[PublicController::class, 'menu'])->middleware('auth')->name('menu');
Route::get('/ristorante/menu/{restaurant}/filtered/{category}/',[PublicController::class, 'dishesByCategory'])->middleware('auth')->name('dishesByCategory');



// Route::controller(PublicController::class)->group(function(){
//     Route::get('/ristorante/menu/{restaurant}',[PublicController::class, 'menu'])->name('menu');
//     Route::get('/ristorante/menu/}',[PublicController::class, 'dishesByCategory'] )->name('dishesByCategory');


// });



// LATO USER CLIENTE
Route::get('/all-restaurants',[PublicController::class, 'indexRestaurants'])->name('indexRestaurants');






