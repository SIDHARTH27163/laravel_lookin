<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');

        $user_role=Auth::user()->role;
        
        switch($user_role){
               case 0:
                return redirect('admin_dashboard');
                case 1:
                    return redirect('seller');
            
           
            default:
            return view('auth.signin');

        }

 


    }


    public function homepage(){
        try{
          
           // $t_data=  DB::table('tourist_places')->where('status' , 1)->orderBy('id' , 'desc')->paginate(10);
            // display emnds
             return view('welcome', ['tdata'=>$t_data]);
           // return ($cat_data);
            }catch(\Exception $e){
                dd($e);
         }
    }
}
