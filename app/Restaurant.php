<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable=[
    	'rest_name',
    	'service',
    	'email',
    	'phone_number',
    	'address',
    	'password',
    	'photo',
    ];
}
