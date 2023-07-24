<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Image;
use App\Rules\UploadCount;

class serviceController extends Controller
{
    //
    public function get_services(){
        try{
             $service_data=  DB::table('services')->where('status' , 0)->orderBy('service_name')->paginate(4);
             $servicedata=  DB::table('services')->where('status' , 1)->orderBy('service_name')->paginate(4);
            // $loc_data=  DB::table('blogs_locations')->orderBy('id' , 'desc')->get();
            // display  blogs both uproved and un uproved 
          
            // display emnds
             return view('admin.manage_services', ['servicedata'=>$service_data  , 'service_data'=>$servicedata]);
            
            //return ($service_data);
            }catch(\Exception $e){
                dd($e);
         }
    }
    public function add_service(Request $request){
        try{
            $data = $request->only('service_name' , 'image' , 'page_link' , 'description');
            $validator = Validator::make($data, [  
        
            'service_name' => 'required|string|unique:services',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:4000', //|unique:blogs_locations
            'page_link'=>'required',
            'description'=>'required|max:800'
        ]);
        if ($validator->fails()) {
    
            // get the error messages from the validator
            $messages = $validator->messages();
    
            // redirect our user back to the form with the errors from the validator
            // return Redirect::to('signup')
            //     ->withErrors($messages);
                return redirect()->back()->withErrors($messages);
                //return ($messages);
        }else{
            $image = $request->file('image');
            $input = time().'.'.$image->getClientOriginalExtension();
            //your directory to upload
            $destinationPath = public_path('/service_images');
            //save and resize image
            $img = Image::make($image->getRealPath());
            $img->resize(600,600, function ($constraint) {
              $constraint->aspectRatio();
              })->save($destinationPath.'/'.$input);
            //$image->add($input);

            $service=Service::create([
                'service_name'=>$request->service_name,
               
                'page_link'=>$request->page_link,
                'description'=>$request->description,
              
                'image'=>$input,
               
            ]);
            return redirect()->back()->with('message', 'Service Added Successfully');
        }
             
           // return ($cat_data);
            }catch(\Exception $e){
                dd($e);
         }
    }
public function change_service_status($id, Request $request){
    $data = Service::find($id); // find single value

    if($data->status == 0){
        DB::update('update services set status = 1 where id = ?', [$id]);

       
    
            return redirect()->back()->with('message', 'Service  Activated');
    }else{
        DB::update('update services set status = 0 where id = ?', [$id]);

       
    
        return redirect()->back()->with('message', 'Service  Deactivated');
    }

        //dd($data->service_name);
}


public function change_to($id, Request $request){
    $data = Service::find($id); // find single value

    if($data->for_user == 0){
        DB::update('update services set for_user = 1 where id = ?', [$id]);

       
    
            return redirect()->back()->with('message', 'Service Activated Activated For All Users');
    }else{
        DB::update('update services set for_user = 0 where id = ?', [$id]);

       
    
        return redirect()->back()->with('message', 'Service De-Activated Activated For All Users');
    }
}
}
