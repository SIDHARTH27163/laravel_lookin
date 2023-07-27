<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\TouristController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\serviceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// services on index page 

// Route::get("/" , [ServicesController::class,'services_list']);

// routes for login 





// routes for admins



Route::get('signin', function () {
    // $user=Auth::user();

if(!Auth::check()){
return view('auth.signin');
}


    return redirect( '/home'
);


})->name('signin');
Route::post("user_signin" , [authController::class,'index']);
// user signup
Route::post("user_signup" , [authController::class,'user_signup']);
Route::get('signup', function () {
    return view('auth.signup');
});

Route::get("seller_signup" , [authController::class,'seller_signup']);
Route::post("seller_signin" , [authController::class,'seller_signin']);
// admin routes
Route::get('admin_dashboard',function(){
   return view('admin.admin_home');
})->name('admin_home')->middleware('admin');

Route::get('admin_blogs' , [BlogsController::class,'admin_blogs'])->name('admin_blogs')->middleware('admin');;

Route::get("manage_blogs_location" , [BlogsController::class,'location_list'])->name('manage_blogs_location')->middleware('admin');
Route::get("manage_blogs_category" , [BlogsController::class,'category_lists'])->name('manage_blogs_category')->middleware('admin');


//  admin form actons
Route::post("add_loc" , [BlogsController::class,'add_loc']);
Route::post("add_cat" , [BlogsController::class,'add_cat']);
Route::post("add_blogs_admin" , [BlogsController::class,'add_blogs_admin']);
// add gallery routes
Route::get('upload_gallery/{id}' , [BlogsController::class,'upload_gallery']);
Route::post('upload_blogs_gallery/{id}' , [BlogsController::class,'upload_blogs_gallery']);
// add gallery routes ends
// admin form action
// admin fetch starts
// admin delete routes
Route::get('delete_loc/{id}' , [BlogsController::class,'delete_loc']);
Route::get('delete_cat/{id}' , [BlogsController::class,'delete_cat']);
Route::get('update_b_status_1/{id}' , [BlogsController::class,'update_b_status_1']);
Route::get('update_b_status_0/{id}' , [BlogsController::class,'update_b_status_0']);
Route::get('delete_b/{id}' , [BlogsController::class,'delete_b']);
// admin delete routes

// admin fetch ends


// admin tourist places routes starts
Route::get('manage_places_location' , [TouristController::class,'get_location'])->name('get_location')->middleware('admin');;
Route::post('add_places_loc', [TouristController::class,'add_location']);

Route::get('delete_t_loc/{id}' , [TouristController::class,'delete_loc']);
Route::get("manage_places_category" , [TouristController::class,'category_lists'])->name('manage_places_category')->middleware('admin');
Route::post("add_t_cat" , [TouristController::class,'add_t_cat']);
Route::get('delete_t_cat/{id}' , [TouristController::class,'delete_cat']);
Route::get('manage_places' , [TouristController::class,'admin_t_places'])->name('manage_places')->middleware('admin');
Route::post("add_tourist_places" , [TouristController::class,'add_tourist_places']);
Route::get('upload_t_gallery/{id}' , [TouristController::class,'upload_t_gallery'])->name('upload_t_gallery')->middleware('admin');
Route::post('upload_places_gallery/{id}' , [TouristController::class,'upload_places_gallery']);
Route::get('update_t_status_1/{id}' , [TouristController::class,'update_t_status_1']);
Route::get('update_t_status_0/{id}' , [TouristController::class,'update_t_status_0']);
Route::get('delete_t/{id}' , [TouristController::class,'delete_t']);
// admin tourist places routes ends

// admin add services 
Route::get('manage_services' , [serviceController::class , 'get_services'])->name('admin_services')->middleware('admin');
Route::post('add_service' , [serviceController::class , 'add_service'])->name('add_service')->middleware('admin');
Route::get('change_service_status/{id}',[serviceController::class , 'change_service_status'])->name('change_service_status')->middleware('admin');
Route::get('change_to/{id}',[serviceController::class , 'change_to'])->name('change_to')->middleware('admin');
// admin add services ends
// admin add services ends
// admin services sub category starts
Route::get('manage_services_category',[serviceController::class , 'manage_services_category'])->name('manage_services_category')->middleware('admin');
Route::post('add_service_category' , [serviceController::class , 'add_service_category'])->name('add_service_category')->middleware('admin');
Route::get('delete_service_cat/{id}',[serviceController::class , 'delete_service_cat'])->name('delete_service_cat')->middleware('admin');
// admin sub category ends



// admin Routes ends

Route::get('seller',function(){
    return view('seller.seller_index');
})->name('seller')->middleware('seller');





Route::get('/home', [HomeController::class, 'index'])->name('home');


// routes for homepage

Route::get("/" , [HomepageController::class,'homepage']);
Route::get("tourist_places/{text}" , [HomepageController::class,'get_single_place']);
Route::get("blogs" , [HomepageController::class,'all_blogs_list']);
Route::get("user_blogs/{name}" , [HomepageController::class,'user_blogs_list']);
Route::get("blog/{text}" , [HomepageController::class,'single_blog']);
Route::any("search_blogs" , [HomepageController::class,'search_blogs']);
Route::get("share"  ,[HomepageController::class , 'share']);
Route::get("tourist_places"  ,[HomepageController::class , 'tourist_places']);
Route::get("filter_places/{filter}", [HomepageController::class,'filter_places']);
Route::get("filter_blogs/{filter}", [HomepageController::class,'filter_blogs']);
Route::any("search_places" , [HomepageController::class,'search_places']);
Route::get("services" , [HomepageController::class,'all_services']);
// routes for home page ends
Route::get("/logout" , [authController::class,'logout']);


// footer components

Route::get('termsandconditions', function () {
    return view('footer.terms');
});
Route::get('privacyandpolicy', function () {
    return view('footer.privacy');
});
Route::get('aboutus', function () {
    return view('footer.about');
});
Route::get('contactus', function () {
    return view('footer.contact');
});



// footer components ends



// user or blogger routes



Route::get('user_dashboard',function(){
    return view('user.user_dashboard');
})->name('user_dashboard')->middleware('user');



Route::get("upload_blogs" , [usersController::class,'blogs_req'])->name('upload_blogs')->middleware('user');


Route::post("upload_blog" , [usersController::class,'upload_blog'])->name('upload_blog')->middleware('user');
Route::get("user_upload_gallery/{id}" , [usersController::class,'user_upload_gallery'])->name('user_upload_gallery/{id}')->middleware('user');

Route::post('upload_blogs_gallery_user/{id}' , [usersController::class,'user_upload_blogs_gallery']);
Route::get("blogs_list" , [usersController::class,'blogs_list'])->name('blogs_list')->middleware('user');
Route::get("user_profile" , [usersController::class,'user_profile'])->name('user_profile')->middleware('user');
Route::post("update_profile_img" , [usersController::class,'update_profile_img'])->name('update_profile_img')->middleware('user');

Route::get('user_notifications',function(){
    return view('user.user_notifications');
})->name('user_notifications')->middleware('user');
Route::get('request_admin',function(){
    return view('user.user_notifications');
})->name('request_admin')->middleware('user');
Route::get('blog_comments',function(){
    return view('user.user_notifications');
})->name('blog_comments')->middleware('user');