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
        $restaurants=Restaurant::get()->all();



        return view('welcome', compact('restaurants'));

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

    public function profile(Restaurant $restaurant){
        $user=Auth::user();
        $restaurant=Restaurant::where('user_id', $user->id)->first();
        return view('profile', compact('restaurant','user'));
    }
        
    public function selectMenuCategory(Restaurant $restaurant, Request $request, Table $table)
    {
        $category_input = $request->input('category_id');
        $category_all = $request->input('category_all');
        $restaurant_id =$request->input('restaurant_id');
        $restaurant=Restaurant::where('id',$restaurant_id)->first();
        $categories=Category::get()->all();

        if(!empty($category_all)){
            $dishes=Dish::where('rest_id', $restaurant->id)->orderBy('category_id')->get();

        }else{
            $dishes=Dish::where('rest_id', $restaurant->id)->where('category_id', $category_input)->get();


        }



        return view('restaurant.menu', compact('restaurant','dishes','categories'));
    }
}











