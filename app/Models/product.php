<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'food';
    protected $fillable = ['FoodName','price','description','image','cotegories'];
}
