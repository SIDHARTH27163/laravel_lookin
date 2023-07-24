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
class usersController extends Controller
{
    //
    public function blogs_req(){
        try{
            $cat_data=  DB::table('blogs_cats')->orderBy('id' , 'desc')->get();
            $loc_data=  DB::table('blogs_locations')->orderBy('id' , 'desc')->get();
            // display  blogs both uproved and un uproved 
          
            // display emnds
             return view('user.upload_blogs', ['catdata'=>$cat_data , 'locdata'=>$loc_data ]);
           // return ($cat_data);
            }catch(\Exception $e){
                dd($e);
         }
    }
    // upload  blog 
    public function upload_blog( Request $request){
        try{
            $data = $request->only('category',  'title' , 'description','additional_description' ,'image');
        $validator = Validator::make($data, [
            
           
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
            $user = auth()->user();
        
            $blog=Blog::create([
                
                'category'=>$request->category,
                'title'=>$request->title,
                'description'=>$request->description,
                'additional_description'=>$request->additional_description,
                'image'=>$input,
                'user_name'=> $user->fname.' '.$user->lname,
                'user_id'=>$user->id,
                'date'=>date('d-m-Y')
            ]);
            

            $lid = $blog->id;
           //dd($lid);
            return Redirect::to('user_upload_gallery/'.$lid)->with('message', 'Blog Uploaded  Successfully Now Upload Gallery Here');
        }
    }catch(\Exception $e){
        dd($e);
    }
    }
    // upload blog ends

    // upload galery
    public function user_upload_gallery($id, Request $request){
        //return($id);
        // return view('admin.upload_gallery',
        // ['id'=> [$id]]);
        return view('user.user_upload_gallery', ['id'=>$id]);
    }
    public function user_upload_blogs_gallery($id, Request $request){
   

        try{
        
            $data = $request->only('files');
            $validator = Validator::make($data, [
            
            
                //'files.*' => [new UploadCount()],
            
            
                'files' => 'required|array|min:1|max:5',
        'files.*' => 'required|image|mimes:jpeg,png,jpg', 
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
        return Redirect::to('blogs_list')->with('message', 'Gallery Uploaded Successfuly Now Wait For Admin Approval');



    }
        }catch(\Exception $e){
            dd($e);
        }
        
        }

        public function blogs_list(){
            try{
                $user = auth()->user();
                $c_data=  DB::table('blogs')->where('user_id' , $user->id)->where('status' , 0)->orderBy('id' , 'desc')->paginate(10);
                $a_data=  DB::table('blogs')->where('user_id' , $user->id)->where('status' , 1)->orderBy('id' , 'desc')->paginate(10);
              // return("user uploaded blogs".$a_data);
               return view('user.user_blogs', ['udata'=>$c_data , 'adata'=>$a_data ]);
               // return ($cat_data);
                }catch(\Exception $e){
                    dd($e);
             }
             
        }

        public function user_profile(){
            try{
                $user = auth()->user();
                return view('user.user_profile', ['userdata'=>$user]);
            }catch(\Exception $e){
                dd($e);
         }
        }
        public function update_profile_img(Request $request){
            try{
                $user = auth()->user();
            $data = $request->only('image');
            $validator = Validator::make($data, [
                
                
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
                $destinationPath = public_path('/profile_images');
                //save and resize image
                $img = Image::make($image->getRealPath());
                $img->resize(600,600, function ($constraint) {
                  $constraint->aspectRatio();
                  })->save($destinationPath.'/'.$input);
                  DB::table('users')
                 ->where('id', $user->id)
              ->update(['image' =>$input ]);
                  return redirect()->back()->with('success', 'Profile Image Uploaded  Successfully ');
            }
            }catch(\Exception $e){
                dd($e);
         }
        }
}
