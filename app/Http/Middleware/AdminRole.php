<?php

namespace App\Http\Middleware;


use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

use Closure;
use Illuminate\Http\Request;

class AdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     return $next($request);
    // }

    public function handle($request, Closure $next, $role = 'admin')
    {
        // Check if the user is logged in and the session has 'loginId' set
        if (Session::has('loginId')) {
            $userId = Session::get('loginId');
            $user = User::find($userId);

            // Check if the user's role matches the expected role
            if ($user && $user->role === $role) {
                return $next($request); // Allow access to the route
            }
        }

        // Redirect or abort access if the user's role doesn't match or they are not logged in
        return redirect('dashboard')->with('fail', 'You do not have permission to access this page.');
    }
}
