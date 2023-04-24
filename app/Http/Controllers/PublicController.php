<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Table;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    //



    public function home(Restaurant $restaurant) {

            $restaurants = Restaurant::get()->all();
            $restaurant = Restaurant::where('user_id', auth()->id())->first();




        return view('welcome', compact('restaurants','restaurant'));
    }




    public function createRestaurant() {




        return view('createRestaurant');
    }
    




    public function createDish() {


        $restaurant=Restaurant::get()->all();
        



        $categories=Category::get()->all();
        return view('createDish', compact('categories','restaurant'));
    }



    public function indexRestaurants(Restaurant $restaurants,Table $tables){


        $restaurants=Restaurant::get()->all();
        $user=Auth::user();

        $categories=Category::get()->all();



        return view('indexRestaurants', compact('restaurants','tables','user'));
      }



    public function menu(Restaurant $restaurant,Dish $dishes,Category $category){

        $dishes = Dish::where('rest_id', $restaurant->id)->get();


        return view('restaurant.menu', compact('restaurant','dishes', 'category'));



    }



    public function dishesByCategory(Restaurant $restaurant, Category $category){

        $dishes= Dish::where('category_id', $category->id)->where('rest_id', $restaurant->id)->get();
        return view('restaurant.dishesByCategory',compact('dishes','restaurant','category'));



    }

        
        
}











