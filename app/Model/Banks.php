<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Banks extends Model
{
    protected $fillable = [
    	'Account_name','PIN_code','Phone_number','Balance','user_id'
    ];
}
