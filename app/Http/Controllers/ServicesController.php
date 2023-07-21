<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ServicesController extends Controller
{
    //
function services_list(){
 $data= DB::select("select * from services");
 $data1= DB::select("select * from users");
return view('welcome', ['data'=>$data , 'data1'=>$data1]);

   

}

function users_list(){
    $data= DB::select("select * from users");
   
   return view('welcome', ['data1'=>$data]);
   }

}
