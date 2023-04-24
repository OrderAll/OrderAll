<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'rest_id',
        'count',
    ];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }

}
