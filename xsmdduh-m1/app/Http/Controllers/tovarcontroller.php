<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tovarcontroller extends Controller
{
   public function show (){
        $t=\App\Models\tovars::OrderBy('id','desc')->get();
        return view ('catalog',['tovars'=>$t]); 
    }
    public function slider (){
        $t=\App\Models\tovars::OrderBy('id','desc')->get();
        return view ('about',['tovars'=>$t]); 
    }
}
