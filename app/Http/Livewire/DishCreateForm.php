<?php

namespace App\Http\Livewire;

use App\Models\Dish;
use App\Models\User;
use Livewire\Component;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

class DishCreateForm extends Component
{
    public $name;
    public $description;
    public $category_id;
    public $price;
    public $rest_id;

    public function render(Category $categories, Restaurant $restaurant)
    {
        $restaurant=Restaurant::get()->where('user_id', auth()->id())->first();
        $categories=Category::get()->all();
        return view('livewire.dish-create-form', compact('categories','restaurant'));
    }
    protected $rules= [
        'name' => 'required',
        'description' =>'required',
        'price' =>'required',
    ];

    protected $messages =[
        'name.required' => 'Nome Attività obbligatorio.',
        'description.required'  => 'Descrizione obbligatoria.',
        'price.required'  => 'Prezzo obbligatorio.',
    ];

    public function store(Restaurant $restaurant){
        $restaurant=Restaurant::where('user_id', auth()->id())->first();
        $this->validate();
        $dish=Dish::create([
            'name'=>$this->name,
            'description' =>$this->description,
            'price' =>$this->price,
            'category_id' =>$this->category_id,
            'rest_id' =>$this->rest_id,
            
        ]);
        // $dish->restaurant()->attach($this->rest_id);


        $this->reset();
        return view('restaurant.index', compact('restaurant'));

    }
}
