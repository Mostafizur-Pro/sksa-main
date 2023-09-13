<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function blackBelts(){
        return view('black-belts');
    }
    public function events(){
        return view('events');
    }
    public function contact(){
        return view('contact');
    }
}
