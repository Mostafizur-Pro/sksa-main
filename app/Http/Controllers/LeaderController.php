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

    public function leaderDetails($id)
    {
        $leadersJson = file_get_contents(storage_path('leader.json'));
        $leaders = json_decode($leadersJson, true);

        $leader = null;

        foreach($leaders as $item){
            if($item['id'] == $id){
                $leader = $item;
                break;
            }
        }
        if($leader == null){
            abort(404);
        }

        return view('components.membership.leader-details', ['leader' => $leader]);
    }



}
