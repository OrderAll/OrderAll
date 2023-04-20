<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Mail\BecomeRestAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class RestAdminController extends Controller
{
    public function indexRestaurant(Restaurant $restaurant){
        $restaurant=Restaurant::where('user_id','=', auth()->id())->first();
        return view('restaurant.index', compact('restaurant'));
    }
    public function becomeRestAdmin(){
        if (!Auth::user()) {
            Session::flash('lavoraConNoi', "Per poter entrare a far parte del nostro team, devi prima registrati");
            return false;
        }else{
            Mail::to("hello@example.com")->send(new BecomeRestAdmin(Auth::user())); 
            return redirect('/')->with('message','you have applied to become a reviewer');
        }
    }

    public function makeRestAdmin(User $user){
        Artisan::call('app:make-user-rest-admin', ["email"=>$user->email]);
        return redirect('/create-restaurant')->with('message', 'Complimenti! Sei diventato un restAdmin del sito');
    }
}
