<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductControler extends Controller
{
    //
    public function show(){
        return view('Movies')
        ->with('m1','Lift')
        ->with('m1','Orion and the Dark');
    }
}
