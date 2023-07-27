<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    //
   public function index(Request $request)
    {
        $credentials = $request->only('email', 'password');
        //valid credential
        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return redirect()->back()->withErrors($messages );
        }
        try{
            if(Auth::attempt($credentials)){
               
                $user_role=Auth::user()->role; 
                $user=Auth::user();
                $request->session()->put('user', $user);

                    switch($user_role){
                case 0:
                    return redirect('admin_dashboard');
                    case 1:
                        return redirect('seller');
                case 2:
                    return redirect('user_dashboard');
                //     break;
          
               
                default:
                   Auth::logout();
                   return view('auth.signin');
                }
            }else{
            
                return redirect()->back()->with('msg' ,'Invalid login credentials.');
         //dd($messages1);
            }
        } catch(\Exception $e){
           dd($e);
    }
        
        
        
        
    }
    public function user_signup(Request $request)
    {

       


        try{
            $data = $request->only('fname','lname', 'email'  , 'password' ,'phone', 'city' , 'state' , 'country' , 'address' , 'tc' , 'confirm_password');
            $validator = Validator::make($data, [
                
                'fname' => 'required|string',
                'lname'=>'required|string',
                'email' => 'required|email|unique:users',
                'password'=>'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
                'confirm_password' => 'required|same:password|min:8',
    
                'address' => 'required',
                'city' => 'required',
                'phone'=>'required|min:10|regex:/[0-9]{9}/',
                'state'=>'required|string',
                'country'=>'required|string',
                'tc'=>'required|integer'
            ]);
    
            //Send failed response if request is not valid
            if ($validator->fails()) {
    
                // get the error messages from the validator
                $messages = $validator->messages();
        
                // redirect our user back to the form with the errors from the validator
                // return Redirect::to('signup')
                //     ->withErrors($messages);
                return redirect()->back()->withErrors($messages);
                //return ($messages);
            }else{
               // dd($request->all());
               User::create([
                    'fname'=>$request->fname,
                    'lname'=>$request->lname,
                   
                    'role'=>2,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'tc'=>$request->tc,
                    'address'=>$request->address,
                    'city'=>$request->city,
                    'state'=>$request->state,
                    'country'=>$request->country,
                    'password'=> bcrypt($request->password),
    
    
                ]);
                
                
                return Redirect::to('signin')->with('message', 'Register Success Please Login Now With Your Credentials');
            }
            
        }catch(\Exception $e){
           dd($e);
    }
    }

public function seller_signup(){
    try{
        $service_data=  DB::table('services')->orderBy('service_name')->get();
   
      
         return view('auth.seller_signup', ['service_data'=>$service_data]);
       // return ($cat_data);
        }catch(\Exception $e){
            dd($e);
     }
   
}

public function seller_signin(Request $request)
{

   


    try{
        $data = $request->only('fname','lname', 'email' ,'service' , 'password' ,'phone', 'city' , 'state' , 'country' , 'address' , 'tc' , 'confirm_password');
        $validator = Validator::make($data, [
            
            'fname' => 'required|string',
            'lname'=>'required|string',
            'email' => 'required|email|unique:users',
            'password'=>'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'confirm_password' => 'required|same:password|min:8',
            'service'=>'required|string',
            'address' => 'required',
            'city' => 'required',
            'phone'=>'required|min:10|regex:/[0-9]{9}/',
            'state'=>'required|string',
            'country'=>'required|string',
            'tc'=>'required|integer',
            
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {

            // get the error messages from the validator
            $messages = $validator->messages();
    
            // redirect our user back to the form with the errors from the validator
            // return Redirect::to('signup')
            //     ->withErrors($messages);
            return redirect()->back()->withErrors($messages);
            //return ($messages);
        }else{
           // dd($request->all());
           User::create([
                'fname'=>$request->fname,
                'lname'=>$request->lname,
               
                
                'email'=>$request->email,
                'phone'=>$request->phone,
                'tc'=>$request->tc,
                'address'=>$request->address,
                'city'=>$request->city,
                'state'=>$request->state,
                'country'=>$request->country,
                'service'=>$request->service,
                'password'=> bcrypt($request->password),
                'role'=>1

            ]);
            
            
            return Redirect::to('signin')->with('message', 'Seller Signup Success Please Login Now With Your Credentials');
        }
        
    }catch(\Exception $e){
       dd($e);
}
}

    public function logout(Request $request)
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
        $request->session()->forget('user');
        return redirect('/');
    }
}
