<?php
namespace App\Http\Controllers;

use App\Models\C_request;
use App\Mail\ContactFormEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class footerController extends Controller
{
    //
    public function contactus(Request $request){
        try{
            $data = $request->only('name','email',  'phone' , 'message');
            $validator = Validator::make($data, [
                
                'name' => 'required|string',
                'email' => 'required|email',
               
                'phone'=>'required|min:10|regex:/[0-9]{9}/',
              
                'message'=>'required',
                
               
                
            ]);
    
            //Send failed response if request is not valid
            if ($validator->fails()) {
    
                // get the error messages from the validator
                $messages = $validator->messages();
        
               
                return redirect()->back()->withErrors($messages);
                //return ($messages);
            }else{
               C_request::create([
                    'name'=>$request->name,
                   
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                   
                    'message'=>$request->message,
                    
    
    
                ]);
               // Mail::to($request->email)->send(new ContactFormEmail($request->name, $request->email, $request->message));
                return redirect()->back()->with('success', 'Request Sent Successfully || Team Will Contact You Soon');
            }
        }  catch(\Exception $e){
                dd($e);
            }

    }
}
