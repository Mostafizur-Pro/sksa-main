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
    public function membership(){
        // return view('membership');
        $leadersJson = file_get_contents(storage_path('leader.json'));
        $leaders = json_decode($leadersJson, true);

        return view('membership', ['leaders' => $leaders]);
    }
    public function blackBelts(){
        return view('black-belts');
    }
    public function events(){
        return view('events');
    }
    public function notice(){
        return view('notice');
    }
    public function contact(){
        return view('contact');
    }
}
