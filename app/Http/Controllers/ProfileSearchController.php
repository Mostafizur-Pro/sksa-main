<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileSearchController extends Controller
{
   
        public function search(Request $request)
        {
            $query = User::query();
    
            // Check if the request has 'search' parameter
            if ($request->has('search')) {
                $searchTerm = $request->input('search');
                
                $query->where('id', 'like', '%' . $searchTerm . '%')
                      ->orWhere('name', 'like', '%' . $searchTerm . '%')
                      ->orWhere('email', 'like', '%' . $searchTerm . '%')
                      ->orWhere('role', 'like', '%' . $searchTerm . '%');
            }
    
            $results = $query->get();
    
            return view('search-results', ['results' => $results]);
        }
}
