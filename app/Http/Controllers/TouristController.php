<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Tourist_location; 
use App\Models\Tourist_cat;
use App\Models\Tourist_place;
use App\Models\Gallery_tourist_place;
use Illuminate\Support\Facades\DB;
use Image;
use App\Rules\UploadCount;
class TouristController extends Controller
{
    //
    public function get_location(){
        try{
            $loc_data=  DB::table('tourist_locations')->orderBy('id' , 'desc')->paginate(10);
    
        
               
            // }
             return view('admin.manage_places_loc', ['data'=>$loc_data]);
           
            }catch(\Exception $e){
                dd($e);
         }
    }

    // add places location in database


 public function add_location(Request $request){
    try{
        $data = $request->only('location');
        $validator = Validator::make($data, [  
    
        'location' => 'required|string|unique:tourist_locations',
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
        Tourist_location::create([

            'location'=>$request->location,
        ]);
        
        return redirect()->back()->with('message', 'Location Successfully Added For Tourist Places ');
    }
    }catch(\Exception $e){
        dd($e);
 }
 }
//  delete location starts

public function delete_loc($id, Request $request){
    try{
    DB::delete('delete from tourist_locations where id = ?',[$id]);
    return redirect()->back()->with('delete_msg', 'Tourist Location Deleted Successfully');
    }catch(\Exception $e){
        dd($e);
 }
}
// delete location ends
// tourist places category starts
public function add_t_cat(Request $request){
        try{
            $data = $request->only('category');
            $validator = Validator::make($data, [  
        
            'category' => 'required|string|unique:tourist_cats',
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
            Tourist_cat::create([

                'category'=>$request->category,
            ]);
            return redirect()->back()->with('message', 'Category Successfully Added For Tourist Places ');
        }
        }catch(\Exception $e){
            dd($e);
     }
    }
// blogs category fetch code
function category_lists(){
    try{
    $cat_data=  DB::table('tourist_cats')->orderBy('id' , 'desc')->paginate(10);

  
     return view('admin.manage_places_cat', ['catdata'=>$cat_data]);
   // return ($cat_data);
    }catch(\Exception $e){
        dd($e);
 }
   }
   // delete category
   public function delete_cat($id, Request $request){
    try{
    DB::delete('delete from tourist_cats where id = ?',[$id]);
    return redirect()->back()->with('delete_msg', 'Tourist Category Deleted Successfully');
    }catch(\Exception $e){
        dd($e);
 }
}
// delete category ends
// tourist places category starts

    // tourist place ends

    public function admin_t_places(){
        try{
            $cat_data=  DB::table('tourist_cats')->orderBy('id' , 'desc')->get();
            $loc_data=  DB::table('tourist_locations')->orderBy('id' , 'desc')->get();
            // display  blogs both uproved and un uproved 
            $u_data=  DB::table('tourist_places')->where('status' , 0)->orderBy('id' , 'desc')->paginate(5);
            $a_data=  DB::table('tourist_places')->where('status' , 1)->orderBy('id' , 'desc')->paginate(5);
            // display emnds
             return view('admin.manage_t_places', ['catdata'=>$cat_data , 'locdata'=>$loc_data ,'udata'=>$u_data,'adata'=>$a_data]);
           // return ($cat_data);
            }catch(\Exception $e){
                dd($e);
         }
    }


    // add tourist place

    public function add_tourist_places( Request $request){
        try{
            $data = $request->only('location','category',  'heading' , 'description','aditional_description' ,'image' , 'district' , 'best_time');
            $validator = Validator::make($data, [
                
                'location' => 'required|string',
                'category'=>'required|string',
               
                'heading' => 'required',
              
                'description'=>'required',
                'aditional_description'=>'required',
                'district' => 'required',
                'best_time' => 'required',
                 'image' => 'required|image|mimes:png,jpg,JPG,jpeg'
            ]);
    
            //Send failed response if request is not valid
            if ($validator->fails()) {
    
                // get the error messages from the validator
                $messages = $validator->messages();
        
               
                return redirect()->back()->withErrors($messages);
                //return ($messages);
            }else{
                $image = $request->file('image');
                $input = time().'.'.$image->getClientOriginalExtension();
                //your directory to upload
                $destinationPath = public_path('/places_images');
                //save and resize image
                $img = Image::make($image->getRealPath());
                $img->resize(600,600, function ($constraint) {
                  $constraint->aspectRatio();
                  })->save($destinationPath.'/'.$input);
                //$image->add($input);
    
                $last_id=Tourist_place::create([
                    'location'=>$request->location,
                    'category'=>$request->category,
                    'heading'=>$request->heading,
                    'description'=>$request->description,
                    'description2'=>$request->aditional_description,
                    'district'=>$request->district,
                    'best_time'=>$request->best_time,
                    'file'=>$input,
                   
                ]);
                
    
                $lid = $last_id->id;
               //dd($lid);
                return Redirect::to('upload_t_gallery/'.$lid)->with('message', 'Blog Uploaded  Successfully Now Upload Gallery Here');
            }
    }catch(\Exception $e){
        dd($e);
    }
    }

    // add tourist place ends

    // upload gallery view starts

    public function upload_t_gallery($id, Request $request){
        //return($id);
        // return view('admin.upload_gallery',
        // ['id'=> [$id]]);
        return view('admin.upload_t_gallery', ['id'=>$id]);
    }
    // upload gallery view ends
    // upload gallery for places code
    public function upload_places_gallery($id, Request $request){
   

        try{
        
            $data = $request->only('files');
            $validator = Validator::make($data, [
            
                'files' => 'required|array|min:1|max:5',
                'files.*' => 'required|image|mimes:jpeg,png , jpg', // Add allowed mime types and max size as per your requirements
            ]);
        
            //Send failed response if request is not valid
            if ($validator->fails()) {
        
                // get the error messages from the validator
                $messages = $validator->messages();
        
               
                return redirect()->back()->withErrors($messages);
                //return ($messages);
            }else{
        
        
              
                if ($request->file('files')){
                    foreach($request->file('files') as  $file){
        
                        $name = time().'.'.$file->getClientOriginalExtension();
                        //your directory to upload
                        $destinationPath = public_path('/places_gallery');
                        //save and resize image
                        $img = Image::make($file->getRealPath());
                        $img->resize(600,600, function ($constraint) {
                          $constraint->aspectRatio();
                          })->save($destinationPath.'/'.$name);
                        //   $files[] = $name;  
                        Gallery_tourist_place::create([
                            'image'=>$name,
                            't_id'=>$id
                        ]);
                    }
                }
                

                
                DB::table('tourist_places')
                    ->where('id', $id)
                    ->update(['g_status' => "1"]);
                return Redirect::to('manage_places')->with('message', 'Gallery Uploaded Successfuly');
        
        
        
            }
        }catch(\Exception $e){
            dd($e);
        }
        
        }

    // upload gallery forplaces ends
    // change tourist place status

public function update_t_status_1($id, Request $request){
    
    try{
       
        DB::update('update tourist_places set status = 1 where id = ?', [$id]);
    
       
            
            return redirect()->back()->with('message', 'Tourist Place Status Apprved');
    }catch(\Exception $e){
        dd($e);
    }
    }
    public function update_t_status_0($id, Request $request){
        try{
       
            DB::update('update tourist_places set status = 0 where id = ?', [$id]);
        
            // DB::update('dele from blogs_cats where id = ?',[$id]);
               
                return redirect()->back()->with('success', 'Tourist Place Status Revoked');
        }catch(\Exception $e){
            dd($e);
        }
    }
    // change tourist Place status ends
// delete tourist place


public function delete_t($id, Request $request){
    try{
    DB::delete('delete from tourist_places where id = ?',[$id]);

    return Redirect::to('manage_places')->with('message', 'Tourist Place Deleted Successfully');
    }catch(\Exception $e){
        dd($e);
 }catch(\Exception $e){
    dd($e);
}
}
// tourist place ends
}
