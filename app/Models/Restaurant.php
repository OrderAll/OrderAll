<?php

namespace App\Models;

use App\Models\Dish;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'map',
        'user_id',
    ];

    public function user(){
        return $this-> belongsTo(User::class);
    }
    public function dishes(){

        return $this-> hasMany(Dish::class);

    }
}
