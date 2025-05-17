<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //index 
    public function index()
    {
        return view('home');
    }
    public function getName()
    {
        $name = "Clarissa";
        return view('home', ['name'=>$name]);
    }
}

