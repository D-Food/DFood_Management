<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable=[
    	'drink_name',
    	'price',
    	'photo',
    ];
}

