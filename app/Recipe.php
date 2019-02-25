<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Recipe extends Model
{
    protected $fillable = [
    'title',
    'duration',
    'description',
    'ingredients',
    'preparation',
    'image'
  ];
}
