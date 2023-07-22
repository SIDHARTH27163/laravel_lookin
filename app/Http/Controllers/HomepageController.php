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
          
            $t_data=  DB::table('tourist_places')->where('status' , 1)->orderBy('location' , 'desc')->limit(6)->get();
            $blogs_data=  DB::table('blogs')->where('status' , 1)->orderBy('updated_at')->limit(6)->get();
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
    $cat_data=DB::table('tourist_places')->where('category' , $cat)->where('status', '1')->orderBy('heading')->paginate(6);
}

$cats=DB::table('tourist_cats')->orderBy('category')->get();
$locs=DB::table('tourist_locations')->orderBy('location')->get();
//return([$cat_data]);
return view('tourist.tourist_place', [ 'place_data'=>$data , 'cr'=>$c_data, 'cat_d'=>$cat_data , 'cats'=>$cats, 'locs'=>$locs]);
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
    $cat_data=DB::table('blogs')->where('category' , $cat)->orderBy('category')->paginate(6);
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
$cats=DB::table('blogs_cats')->orderBy('category')->get();
$locs=DB::table('blogs_locations')->orderBy('location')->get();
        //return([$blogdata,  $g_data , $cat_data]);
        return view('blogs.blog', [ 'blog_data'=>$blogdata , 'gallery'=>$g_data, 'cat'=>$cat_data , 'share'=>$shareButtons1 ,'cats'=>$cats, 'locs'=>$locs]);
        }catch(\Exception $e){
            dd($e);
     }
    }

    public function all_blogs_list(){
        try{
           
            $bdata=  DB::table('blogs')->where('status','1')->orderBy('title')->paginate(6);
            $cats=DB::table('blogs_cats')->orderBy('category')->get();
            $locs=DB::table('blogs_locations')->orderBy('location')->get();
           // dd($bdata);
         return view('blogs.blogs', [ 'b_data'=>$bdata , 'cats'=>$cats, 'locs'=>$locs]);
            }catch(\Exception $e){
                dd($e);
         }
    }
// filter blogs starts
public function filter_blogs($filter){
    try{
        $filter_text=urldecode($filter);
        $filter_data=  DB::table('blogs')->where('status' , 1)->where('category' , $filter_text)->orWhere('location', $filter_text)->orderBy('category')->paginate(6);
        $cats=DB::table('blogs_cats')->orderBy('category')->get();
            $locs=DB::table('blogs_locations')->orderBy('location')->get();
        //return($filter_data);
        if (count ( $filter_data ) > 0)
        return view('blogs.filter_blogs', [ 'filter_data'=>$filter_data , 'message'=>'', 'cats'=>$cats, 'locs'=>$locs]);
        else
            //return ( 'No Result found for' .$filter .' try Another filter');
            $message='No Result found for location or category named ' .$filter .' Try Another filter';
            return view('blogs.filter_blogs', [ 'message'=>$message ,'filter_data'=>$filter_data,  'cats'=>$cats, 'locs'=>$locs]);
            //return view ('tourist.filter_places')->withMessage('No Details found. Try to search again !')->withDetails(['cats'=>$cats, 'locs'=>$locs]);
    }catch(\Exception $e){
        dd($e);
    }
    
    }

// filter blogs ends
    // share document

    public function search_blogs(Request $request){
       try{
        $q=$request->search;
        // Share button 1
      
        $filter_data = Blog::where ( 'location', 'LIKE', '%' . $q . '%' )->orWhere ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'category', 'LIKE', '%' . $q . '%' )->orWhere ( 'user_name', 'LIKE', '%' . $q . '%' )->paginate(9);
        $cats=DB::table('blogs_cats')->orderBy('category')->get();
        $locs=DB::table('blogs_locations')->orderBy('location')->get();
        if (count ( $filter_data ) > 0)
        return view('blogs.search_blogs', [ 'filter_data'=>$filter_data , 'message'=>'', 'cats'=>$cats, 'locs'=>$locs]);
        else
            //return ( 'No Result found for' .$filter .' try Another filter');
            $message='No Result found for location or category named ' .$filter .' Try Another filter';
            return view('blogs.search_blogs', [ 'message'=>$message ,'filter_data'=>$filter_data,  'cats'=>$cats, 'locs'=>$locs]);
    }
            catch(\Exception $e){
                dd($e);
            }
            
      // Load index view
     // return view('blogs.blogs', [ 'share1'=>$shareButtons1]);
}
public function tourist_places(){
    try{
        //$data=  DB::table('tourist_places')->where('status' , 1)->orderBy('id' , 'desc')->paginate(6);
        $data = Tourist_place::wherestatus(1)->orderBy('location')->paginate(6);
        $cr_data=  DB::table('tourist_places')->where('status' , 1)->orderBy('created_at' , 'desc')->Limit(6)->get();
        $cats=DB::table('tourist_cats')->orderBy('category')->get();
        $locs=DB::table('tourist_locations')->orderBy('location')->get();
       return view('tourist.tourist_home', [ 't_data'=>$data , 'c_data'=>$cr_data , 'cats'=>$cats, 'locs'=>$locs]);
        //return($data);
    } catch(\Exception $e){
            dd($e);
     }
   
}


// filter places
public function filter_places($filter){
try{
    $filter_text=urldecode($filter);
    $filter_data=  DB::table('tourist_places')->where('status' , 1)->where('category' , $filter_text)->orWhere('location', $filter_text)->orderBy('heading')->paginate(6);
    $cats=DB::table('tourist_cats')->orderBy('category')->get();
        $locs=DB::table('tourist_locations')->orderBy('location')->get();
    //return($filter_data);
    if (count ( $filter_data ) > 0)
    return view('tourist.filter_places', [ 'filter_data'=>$filter_data , 'message'=>'', 'cats'=>$cats, 'locs'=>$locs]);
    else
        //return ( 'No Result found for' .$filter .' try Another filter');
        $message='No Result found for location or category named ' .$filter .' Try Another filter';
        return view('tourist.filter_places', [ 'message'=>$message ,'filter_data'=>$filter_data,  'cats'=>$cats, 'locs'=>$locs]);
        //return view ('tourist.filter_places')->withMessage('No Details found. Try to search again !')->withDetails(['cats'=>$cats, 'locs'=>$locs]);
}catch(\Exception $e){
    dd($e);
}

}
public function search_places(Request $request){
    try{
        $q=$request->search;
        // Share button 1
      
        $search_data = Tourist_place::where ( 'location', 'LIKE', '%' . $q . '%' )->orWhere ( 'heading', 'LIKE', '%' . $q . '%' )->orWhere ( 'category', 'LIKE', '%' . $q . '%' )->orWhere ( 'description2', 'LIKE', '%' . $q . '%' )->paginate(9);
        $cats=DB::table('tourist_cats')->orderBy('category')->get();
        $locs=DB::table('tourist_locations')->orderBy('location')->get();
        if (count (  $search_data ) > 0)
        //return view('blogs.search_blogs', [ 'b_data'=>$blog]);
        return view('tourist.search_places', [ 'message'=>'' ,'search_data'=>$search_data,  'cats'=>$cats, 'locs'=>$locs]);
        else
         
        $message=' No Result Found';
        return view('tourist.search_places', [ 'message'=>$message ,'search_data'=>$search_data,  'cats'=>$cats, 'locs'=>$locs]);
    }
            catch(\Exception $e){
                dd($e);
            }
}



    }

