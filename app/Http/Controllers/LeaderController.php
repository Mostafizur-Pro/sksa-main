<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaderController extends Controller
{
    public function leader()
    {
        $leadersJson = file_get_contents(storage_path('leader.json'));
        $leaders = json_decode($leadersJson, true);

        return view('membership', ['leaders' => $leaders]);
    }



}
