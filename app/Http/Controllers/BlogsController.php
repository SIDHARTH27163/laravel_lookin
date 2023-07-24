<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Blogs_location;
use App\Models\Blogs_cat;
use App\Models\Blog;
use App\Models\Gallery_blog;
use Illuminate\Support\Facades\DB;
use Image;
use App\Rules\UploadCount;
class BlogsController extends Controller
{
    //

    public function add_loc(Request $request){
        try{
            $data = $request->only('location');
            $validator = Validator::make($data, [  
        
            'location' => 'required|string|unique:blogs_locations',
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
            Blogs_location::create([

                'location'=>$request->location,
            ]);
            return Redirect::to('manage_blogs_location')->with('message', 'Location Added Successfully');
        }
        }catch(\Exception $e){
            dd($e);
     }
    }



    // function for locations fetch from database
    function location_list(){
        try{
        $loc_data=  DB::table('blogs_locations')->orderBy('id' , 'desc')->paginate(10);

    
           
        // }
         return view('admin.admin_blogs_loc', ['data'=>$loc_data]);
       
        }catch(\Exception $e){
            dd($e);
     }
       }
    //    blogs category additon and fetch code
    // blog location delete starts

public function delete_loc($id, Request $request){
    try{
    DB::delete('delete from blogs_locations where id = ?',[$id]);
    return Redirect::to('manage_blogs_location')->with('delete_msg', 'Location Deleted Successfully');
    }catch(\Exception $e){
        dd($e);
 }
}
    // blocation delete ends

    public function add_cat(Request $request){
        try{
            $data = $request->only('category');
            $validator = Validator::make($data, [  
        
            'category' => 'required|string|unique:blogs_cats',
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
            Blogs_cat::create([

                'category'=>$request->category,
            ]);
            return Redirect::to('manage_blogs_category')->with('message', 'Blogs Category Added Successfully');
        }
        }catch(\Exception $e){
            dd($e);
     }
    }
// blogs category fetch code
function category_lists(){
    try{
    $cat_data=  DB::table('blogs_cats')->orderBy('id' , 'desc')->paginate(10);

  
     return view('admin.admin_blogs_cat', ['catdata'=>$cat_data]);
   // return ($cat_data);
    }catch(\Exception $e){
        dd($e);
 }
   }
// delete category
   public function delete_cat($id, Request $request){
    try{
    DB::delete('delete from blogs_cats where id = ?',[$id]);
    return Redirect::to('manage_blogs_category')->with('delete_msg', 'Category Deleted Successfully');
    }catch(\Exception $e){
        dd($e);
 }
}
// delete category ends
// display  blogs both uproved and un uproved 
public function admin_blogs(){
    try{
        $cat_data=  DB::table('blogs_cats')->orderBy('id' , 'desc')->get();
        $loc_data=  DB::table('blogs_locations')->orderBy('id' , 'desc')->get();
        // display  blogs both uproved and un uproved 
        $u_blogs=  DB::table('blogs')->where('status' , 0)->orderBy('id' , 'desc')->paginate(10);
        $a_blogs=  DB::table('blogs')->where('status' , 1)->orderBy('id' , 'desc')->paginate(10);
        // display emnds
         return view('admin.admin_blogs', ['catdata'=>$cat_data , 'locdata'=>$loc_data ,'udata'=>$u_blogs,'adata'=>$a_blogs]);
       // return ($cat_data);
        }catch(\Exception $e){
            dd($e);
     }
}
// add blogs for admin
public function add_blogs_admin( Request $request){
    try{
        $data = $request->only('location','category',  'title' , 'description','additional_description' ,'image');
        $validator = Validator::make($data, [
            
            'location' => 'required|string',
            'category'=>'required|string',
           
            'title' => 'required',
          'additional_description'=>'required',
            'description'=>'required',
             'image' => 'required|image|mimes:png,jpg,jpeg|max:3000'
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
            $destinationPath = public_path('/blog_images');
            //save and resize image
            $img = Image::make($image->getRealPath());
            $img->resize(600,600, function ($constraint) {
              $constraint->aspectRatio();
              })->save($destinationPath.'/'.$input);
            //$image->add($input);

            $blog=Blog::create([
                'location'=>$request->location,
                'category'=>$request->category,
                'title'=>$request->title,
                'description'=>$request->description,
                'additional_description'=>$request->additional_description,
                'image'=>$input,
                'user_name'=>"Lookin Dharamshala",
                'date'=>date('d-m-Y')
            ]);
            

            $lid = $blog->id;
           //dd($lid);
            return Redirect::to('upload_gallery/'.$lid)->with('message', 'Blog Uploaded  Successfully Now Upload Gallery Here');
        }
}catch(\Exception $e){
    dd($e);
}
}
// add blogs for admin ends
public function upload_gallery($id, Request $request){
    //return($id);
    // return view('admin.upload_gallery',
    // ['id'=> [$id]]);
    return view('admin.upload_gallery', ['id'=>$id]);
}
public function upload_blogs_gallery($id, Request $request){
   

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


        
        if($request->hasfile('files'))
        {
           foreach($request->file('files') as $file)
           {
            //    $name = time().rand(1,50).'.'.$file->extension();
            //    $file->move(public_path('/blogs_gallery'), $name);  
              
               $name = time().rand(1,50).'.'.$file->extension();
               //your directory to upload
               $destinationPath = public_path('/blogs_gallery');
               //save and resize image
               $img = Image::make($file->getRealPath());
               $img->resize(600,600, function ($constraint) {
                 $constraint->aspectRatio();
                 })->save($destinationPath.'/'.$name);
                
 Gallery_blog::create([
            'image'=>$name,
            'blog_id'=>$id
        ]);
           }
        }
        // Gallery_blog::create([
        //     'image'=>$input,
        //     'blog_id'=>$id
        // ]);
        DB::table('blogs')
            ->where('id', $id)
            ->update(['g_status' => "1"]);
        return Redirect::to('admin_blogs')->with('message', 'Gallery Uploaded Successfuly');



    }
}catch(\Exception $e){
    dd($e);
}

}

// change blogs status

public function update_b_status_1($id, Request $request){
    
try{
   
    DB::update('update blogs set status = 1 where id = ?', [$id]);

    // DB::update('dele from blogs_cats where id = ?',[$id]);

        return redirect()->back()->with('message', 'Blog Status Approved And Blog Available At User End');
}catch(\Exception $e){
    dd($e);
}
}
public function update_b_status_0($id, Request $request){
    try{
   
        DB::update('update blogs set status = 0 where id = ?', [$id]);
    
        // DB::update('dele from blogs_cats where id = ?',[$id]);
        return redirect()->back()->with('success', 'Blog Status Revoked');
       
    }catch(\Exception $e){
        dd($e);
    }
}
// change blogs status ends
// delete tourist places starts
public function delete_b($id, Request $request){
    try{
    DB::delete('delete from blogs where id = ?',[$id]);
    return redirect()->back()->with('message', 'Blog Deleted Successfully');
    }catch(\Exception $e){
        dd($e);
 }catch(\Exception $e){
    dd($e);
}
}

// delete tourist places ends
}
