<?php

namespace App\Http\Controllers;
use App\Models\Tourist_place;
use Illuminate\Http\Request;
use App\Models\Gallery_blog;
use App\Models\Blog;

use Illuminate\Support\Facades\DB;
class HomepageController extends Controller
{
    //
    public function homepage(){
        try{
          
            $t_data=  DB::table('tourist_places')->where('status' , 1)->orderBy('id' , 'desc')->limit(6)->get();
            $blogs_data=  DB::table('blogs')->where('status' , 1)->orderBy('id' , 'desc')->limit(6)->get();
            // display emnds
             return view('welcome', ['tdata'=>$t_data , 'blogs_data'=>$blogs_data]);
           // return ($cat_data);
            }catch(\Exception $e){
                dd($e);
         }
    }
    public function get_single_place($text){
        try{
        $s_text=urldecode($text);
         $data=  DB::table('tourist_places')->where('heading' , $s_text)->get();
        
        //$data=Tourist_place::find($s_text);
//   return($data);
//return view('tourist.tourist_place', [ 'place_data'=>$data]);
foreach ($data as $doc)
{
    $id=$doc->id;
    $cat=$doc->category;
    $c_data=  DB::table('gallery_tourist_places')->where('t_id' , $id)->get();
    $cat_data=DB::table('tourist_places')->where('category' , $cat)->get();
}


//return([$c_data , $data]);
return view('tourist.tourist_place', [ 'place_data'=>$data , 'cr'=>$c_data, 'cd'=>$cat_data]);
        }catch(\Exception $e){
            dd($e);
     }
    }

    // for single blog

    public function single_blog($text){
        try{
        $s_text=urldecode($text);
        $blogdata=  DB::table('blogs')->where('title' , $s_text)->get();
        foreach ($blogdata as $doc)
{
    $id=$doc->id;
    $cat=$doc->category;
    $g_data=  DB::table('gallery_blogs')->where('blog_id' , $id)->get();
    $cat_data=DB::table('blogs')->where('category' , $cat)->get();
}

$shareButtons1 = \Share::page(
    'locahost:8000/blog/'.$s_text
)
->facebook()
->twitter()
->linkedin()
->telegram()
->whatsapp() 
->reddit();

// Share button 2

        //return([$blogdata,  $g_data , $cat_data]);
        return view('blogs.blog', [ 'blog_data'=>$blogdata , 'gallery'=>$g_data, 'cat'=>$cat_data , 'share'=>$shareButtons1]);
        }catch(\Exception $e){
            dd($e);
     }
    }

    public function all_blogs_list(){
        try{
           
            $bdata=  DB::table('blogs')->where('status','1')->orderBy('id' , 'desc')->paginate(6);
         
           // dd($bdata);
         return view('blogs.blogs', [ 'b_data'=>$bdata]);
            }catch(\Exception $e){
                dd($e);
         }
    }

    // share document

    public function search_blogs(Request $request){
       
        $q=$request->search;
        // Share button 1
      
        $blog = Blog::where ( 'location', 'LIKE', '%' . $q . '%' )->orWhere ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'category', 'LIKE', '%' . $q . '%' )->orWhere ( 'user_name', 'LIKE', '%' . $q . '%' )->paginate(9);
        if (count ( $blog ) > 0)
        return view('blogs.search_blogs', [ 'b_data'=>$blog]);
        else
            return ( 'No Details found. Try to search again !' );
      // Load index view
     // return view('blogs.blogs', [ 'share1'=>$shareButtons1]);
}
    }

