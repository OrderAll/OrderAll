<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class TableController extends Controller
{
    public function __construct(){

        $this->middleware('auth')->except('show');

    }



    public function createTable(Restaurant $restaurant){

        return view('restaurant.createTable', compact('restaurant'));
    }


    public function rules(): array
    {
        return [
            'number' => 'required',
            'rest_id' => 'required',
        ];
    }
    public function storeTable(Request $request, Restaurant $restaurant){
        $restaurant=Restaurant::where('user_id', auth()->id())->first();

        $request->validate([
            'number' => 'required',
            'rest_id' => 'required',
        ]);


        $table = Table::create([
            'number'=>$request->number,
            'rest_id'=>$request->rest_id,
        ]);

        return view('restaurant.index',compact('restaurant'));


    }
    public function allTables(Restaurant $restaurant,Table $tables,){
        $users=User::get()->all();
        $tables=Table::where('rest_id', $restaurant->id)->get();
        return view('restaurant.allTables', compact('restaurant','tables','users'));

    }
    public function addToTable(Request $request, Table $table)
    {
        $table_id = $request->input('table_id');
        $rest_id = $request->input('rest_id');

        $user = Auth::user();
        $user->table_id = $table_id;
        $user->rest_id= $rest_id;
        $user->save();

        $userCount = User::where('table_id', '=', $table->id)->count();

        $table->count = $userCount;
        $table->save();


        return redirect(route('homePage'));
    }
    public function showTable(Restaurant $restaurant, Table $table, User $user){
        $user=Auth::user();
        return view('restaurant.showTable', compact('restaurant','table'));
    }


}