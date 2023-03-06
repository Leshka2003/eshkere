<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tovarcontroller extends Controller
{

    public function slider (){
        $t=\App\Models\tovars::OrderBy('id','desc')->get();
        return view ('about',['tovars'=>$t]); 
    }
    
    public function tovars ($id){
        $t=\App\Models\tovars::where('id',$id)->get();
        return view ('tovarlot',['tovars'=>$t]); 
    }
    
    public function prodlist($name = 'id', $sort = 'desc')
    {
        $prod = \App\Models\tovars::orderby($name, $sort)->where('count','>','0')->get();
        $cat = \App\Models\category::all();
        return view('catalog', ['prod' => $prod,'cat'=>$cat ]);
    }
    public  function filterr($id){
        $prod =\App\Models\tovars::where('category', $id)->get();
        $cat = \App\Models\category::all();
        return view('catalog', ['prod' => $prod,'cat'=>$cat ]);
    }
}
