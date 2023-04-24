<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dish extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'category_id',
        'rest_id',

    ];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

}
