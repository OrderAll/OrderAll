<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function home (Restaurant $restaurant) {
        $restaurant = Restaurant::find(auth()->id());

        return view('welcome', compact('restaurant'));
    }
    public function createRestaurant() {

        return view('createRestaurant');
    }
    
    public function createDish() {
        $restaurant=Restaurant::get()->all();
        
        $categories=Category::get()->all();
        return view('createDish', compact('categories','restaurant'));
    }
    public function indexRestaurants(Restaurant $restaurants){
        $restaurants=Restaurant::get()->all();
        return view('indexRestaurants', compact('restaurants'));
      }
}
