<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function something(){
        return view('something');
    }
}
