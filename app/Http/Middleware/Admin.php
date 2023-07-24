<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       
        if(!Auth::check()){
            return redirect()->route('signin');
        }else{
        $user=Auth::user();
        // echo($user);
        if($user->role==0){
            return $next($request);
        }
        if($user->role==0){
            return redirect()->route('admin_dashboard');
        }
        if($user->role==1){
            return redirect()->route('seller');
        }
        if($user->role==2){
            return redirect()->route('user_dashboard');
        }
    }
    }
}
