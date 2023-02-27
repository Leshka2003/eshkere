<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student(){
        $p=\App\Models\student::OrderBy('id','desc')->get();
        return view ('student92', ['prod'=>$p]);
    }
}
