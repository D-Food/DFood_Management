<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Model\Banks;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    function routetesting($id){
    	if($id<10){
    		return "Less than 10";
    	}else{
    		return "Bigger or equal to 10";
    	}
    }
}
