<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myControl extends Controller
{
public function second(){
    return view('swcond');
}
public function welcome(){
    return view('welcome');
}
}
