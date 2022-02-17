<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function detail(){
        return view('details');
    }
    public function hobi2(){
        return view('hobi2');
    }
    public function hobi3(){
        return view('hobi3');
    }
}
