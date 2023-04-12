<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

class CreateFormRestaurant extends Component
{
    public $name;
    public $map;

    public function render()
    {
        return view('livewire.create-form-restaurant');
    }


    protected $rules= [
        'name' => 'required',
        'map' =>'required'
    ];

    protected $messages =[
        'name.required' => 'Nome Attività obbligatorio.',
        'map.required'  => 'Luogo di nascita obbligatoria.',
    ];

    public function store(){

        $this->validate();

        $restaurant=Restaurant::create([
            'name'=>$this->name,
            'map'=>$this->map,
            'user_id'=>Auth::user()->id,
        ]);

        $this->reset();
        return redirect(route('homePage'))->with('message', 'Ristorante creato correttamente');

    }
}
