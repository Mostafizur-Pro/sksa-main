<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function login()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }

    public function forgetPassword()
    {
        return view('auth/forget-password');
    }

    public function registerUser(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:4',
        ]);

        $existingUser = User::where('email', $request->input('email'))->first();
        if ($existingUser) {
            // Email is not unique, handle the error here
            return back()->withInput()->withErrors(['email' => 'This email is already taken.']);
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();



        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }


    public function loginUser(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string|min:4',
        ]);



        $user = User::where('email', $request->input('email'))->first();

        if ($user) {

            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                // return redirect('/dashboard')->with('success', 'Login successful!');
                return redirect('/dashboard')->with('success', 'Login successful!');
            } else {
                return back()->with('fail', 'Login failed. Please check your password.');
            }
        } else {

            return back()->with('fail', 'Login failed. Please check your user.');
        }
    }
    public function dashboard()
    {
        $data = null; // Initialize the data variable

        if (Session::has('loginId')) {
            $userId = Session::get('loginId');
            $data = User::find($userId); // Retrieve user data by the loginId from the session
            $allData = User::all();
        }

        return view('dashboard/index', compact('data', 'allData'));
    }

    
    public function logout(){
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('/login');
        }
    }

    public function editProfile() {
        $data = null; // Initialize the data variable
    
        if (Session::has('loginId')) {
            $userId = Session::get('loginId');
            $data = User::find($userId); // Retrieve user data by the loginId from the session
        }
    
        return view('dashboard.edit', compact('data'));
    }


    public function updateProfile(Request $request) {
        // Validate form input here
        $this->validate($request, [
            'name' => 'required|string|max:255',
            // Add validation rules for other fields you want to update
        ]);
    
        // Get the authenticated user using the session loginId
        $userId = Session::get('loginId');
        $user = User::find($userId);
    
        if ($user) {
            // Update user's profile information (excluding email)
            $user->name = $request->input('name');
            // Update other user details as needed
            $user->save();
    
            return redirect('/dashboard')->with('success', 'Profile updated successfully.');
        } else {
            // Handle the case where no user is authenticated
            // This could be a guest user or an unauthenticated request
            // You can redirect or return an appropriate response here
            return redirect('edit')->with('fail', 'User not found.');
        }
    }







}
