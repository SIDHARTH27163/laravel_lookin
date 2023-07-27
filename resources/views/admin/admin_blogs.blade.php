@extends('admin.layouts.master')  
@section('content')  
<div class="p-4  rounded-lg  border-2 border-slate-900 border-dashed h-auto">
    <div class="grid grid-cols-3 gap-4 mb-4">
       <div class="flex flex-col items-center justify-center h-24 rounded  bg-rose-600">
         <p class="text-2xl text-gray-50 ">
           Unapproved Blogs
           </p>
         <p class="text-2xl text-gray-50 ">
            {{ $total_u }}
           </p>
       </div>
       <div class="flex flex-col items-center justify-center h-24 rounded  bg-orange-600">
         <p class="text-2xl text-gray-50 ">
            Approved Blogs
            </p>
          <p class="text-2xl text-gray-50 ">
             {{ $total_a }}
            </p>
       </div>
       <div class="flex flex-col items-center justify-center h-24 rounded  bg-green-600">
         <p class="text-2xl text-gray-50 ">
            Total Blogs
            </p>
          <p class="text-2xl text-gray-50 ">
             {{ $total }}
            </p>
       </div>


   




    </div>
  
   
    <div class="w-full p-4 ">
      
      <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">Add Blogs As Lookin Dharamshala</p>
      <div class="h-full  w-full  flex flex-col  items-center justify-center ">
         
         {{-- message block starts --}}
         <div class="flex items-start  w-full justify-start">
       
            @if(session()->has('success'))
     
            <div id="toast-top-right" class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-100 bg-rose-600 divide-x  rounded-lg shadow top-5 right-5 dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">
               <div class="text-sm font-normal">{{ session()->get('success') }}</div>
               
           </div>
           
              
            @endif
            {{-- add message --}}
            @if(session()->has('message'))
     
            <div id="toast-top-right" class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-100 bg-green-600 divide-x  rounded-lg shadow top-5 right-5 dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">
               <div class="text-sm font-normal">{{ session()->get('message') }}</div>
           </div>
            
               
            @endif
            {{-- add message ends --}}
           </div>
          {{-- message Block ends --}}
        {{-- form starts --}}
          <form action="add_blogs_admin" method="post" class=" w-full bg-white p-4  rounded-lg shadow-lg  " enctype="multipart/form-data">
              @csrf  
              @method('post') 
              <div class="flex lg:flex-row md:flex-row sm:flex-col flex-col justify-between gap-x-3">
               <div class="mb-4 w-full">
                  <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Select Blog Location</label>
                  <select id="countries"  name="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                     <option value="">Choose a Location</option>
                     @foreach ($locdata as $loc)
                     <option > {{$loc->location}}</option>
                    
                     @endforeach
                   </select>
                  @if($errors->has('location'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('location') }}</p>
    @endif
                </div>
                <div class="mb-4 w-full">
                  <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Select Blog Category</label>
                  <select id="countries"  name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                     <option value="">Choose a category</option>
                     @foreach ($catdata as $cat)
                     <option> {{$cat->category}}</option>
                    
                     @endforeach>
                   </select>
                  @if($errors->has('category'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('category') }}</p>
    @endif
                </div>



              </div>
              <div class="flex  flex-col justify-between gap-x-3">
               <div class="mb-4 w-full">
                  <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Add Blog Title</label>
                  <textarea rows="2" type="text" name="title" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Blog Heading Here"></textarea>
                  @if($errors->has('title'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('title') }}</p>
    @endif
                </div>
                <div class="mb-4 w-full">
                  <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Add Blog Description</label>
                  <textarea rows="3" type="text" name="description" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Blog Description Here"></textarea>
                  @if($errors->has('description'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('description') }}</p>
    @endif
                </div>

                <div class="mb-4 w-full">
                  <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Add Blog additional description</label>
                  <textarea rows="3" type="text" name="additional_description" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Blog Description Here"></textarea>
                  @if($errors->has('additional_description'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('additional_description') }}</p>
    @endif
                </div>

              </div>
              <div class="flex lg:flex-row md:flex-row sm:flex-col flex-col justify-between gap-x-3">
               <div class=" w-full mb-4">
                  <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Select Blog Cover Image</label>
                  <input type="file" class="form-control" name="image" />
                  @if($errors->has('image'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('image') }}</p>
    @endif
                </div>

              
              </div>

              <div class="mb-4">
               <button class="w-auto px-4 py-3  font-bold text-white bg-gradient-to-r from-black to-blue-800 hover:from-black hover:to-blue-400 
                                   hover:rounded-full rounded-xl focus:outline-none focus:shadow-outline
                                   hover:scale-105 duration-500 ease-in-out 
                                  ">
                             Submit
                          </button>
           </div>
             
          </form>
          {{-- form ends --}}
      </div>
  </div>
   {{-- blogs location and edit section starts --}}
   <div class="w-full p-4 ">
      
      <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2"> Blogs Waiting For Approvals</p>
      <div class="relative overflow-auto shadow-md sm:rounded-lg">
         <table class="w-full text-sm text-left text-gray-500 ">
             <thead class="text-xs text-gray-100 uppercase bg-gray-700 ">
                 <tr>
                     <th scope="col" class="px-3 py-3">
                        Index
                     </th>
                     <th scope="col" class="px-3 py-3">
                        Id
                     </th>
                     <th scope="col" class="px-3 py-3">
                        Status
                      </th>
                      <th scope="col" class="px-3 py-3">
                        Gallery Status
                      </th>
                     <th scope="col" class="px-3 py-3">
                       Category
                     </th>
                     
                     <th scope="col" class="px-3 py-3">
                         Location
                     </th>
                     <th scope="col" class="px-3 py-3">
                       Image
                    </th>

                     <th scope="col" class="px-3 py-3">
                       Title
                    </th>
                    <th scope="col" class="px-3 py-3">
                     User Name
                  </th>
                    <th scope="col" class="px-3 py-3">
                     Date
                 </th>
                 
                
              <th scope="col" class="px-3 py-3">
              Action
            </th>
                 </tr>
             </thead>
             <tbody>
              
               @foreach ($udata as $i=> $ublog)
              
               <tr class=" border-b bg-gray-900 border-gray-700 text-white font-semibold">
                  <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                     {{$i}}
                  </th>
                  <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                     {{$ublog->id}}
                  </th>
                  <td class="px-3 py-4">
                    @if(  $ublog->status == 1)
                    <p class="text-green-500">Approved</p>
                   @else
                   <p class="text-red-500">Not Approved</p>
                    

                    @endif
                  </td>
                  <td class="px-3 py-4">
                     @if(  $ublog->g_status == 1)
                     <p class="text-green-500">Uploaded</p>
                  @else
                  <p class="text-red-500">Not Uploaded</p>
                   

                   @endif
                  </td>
                  <td class="px-3 py-4">
                     {{$ublog->category}}
                  </td>
                  <td class="px-3 py-4">
                     {{$ublog->location}}
                  </td>
                  <td>
                     <img src="{{ asset('blog_images/'.$ublog->image) }}" style="height: 50px;width:50px;">
                                          
                    </td>
                  <td class="px-3 py-4">
                     {{$ublog->title}}
                  </td>
                  <td class="px-3 py-4">
                     {{$ublog->user_name}}
                  </td>
                  <td class="px-3 py-4">
                     {{$ublog->date}}
                  </td>
                  <td class="px-1 py-4 text-center">
                     <a href="{{url('delete_b/'.$ublog->id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>
                     @if(  $ublog->status == 1)
                     <a href="{{url('update_b_status_0/'.$ublog->id)}}" class="font-medium text-orange-400 dark:text-orange-500 hover:underline">Revoke</a><br>
                     @else
                     <a href="{{url('update_b_status_1/'.$ublog->id)}}" class="font-medium text-blue-500 dark:text-blue-600 hover:underline">Approve</a><br>
                     @endif
                    
                     @if ($ublog->user_id==0)
                     <a href="{{url('upload_gallery/'.$ublog->id)}}" class="font-medium text-green-400 dark:text-green-500 hover:underline">Upload Gallery</a><br>
                     @endif
                   
                  </td>
              </tr>
               @endforeach
                
             </tbody>
         </table>
         <div class="p-2 ">
            
            {!! $udata->links() !!}
         </div>
      </div>
</div> 
<div class="w-full p-4 ">
      
   <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2"> Approved Blogs</p>
   <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500 ">
         <thead class="text-xs text-gray-100 uppercase bg-gray-700 ">
             <tr>
                 <th scope="col" class="px-3 py-3">
                    Index
                 </th>
                 <th scope="col" class="px-3 py-3">
                  Id
               </th>
                 <th scope="col" class="px-3 py-3">
                    Status
                  </th>
                  <th scope="col" class="px-3 py-3">
                    Gallery Status
                  </th>
                 <th scope="col" class="px-3 py-3">
                   Category
                 </th>
                 
                 <th scope="col" class="px-3 py-3">
                     Location
                 </th>
                 
                 <th scope="col" class="px-3 py-3">
                  Image
              </th>
                 <th scope="col" class="px-3 py-3">
                   Title
                </th>
                <th scope="col" class="px-3 py-3">
                 User Name
              </th>
                <th scope="col" class="px-3 py-3">
                 Date
             </th>
             
            
          <th scope="col" class="px-3 py-3">
          Action
        </th>
             </tr>
         </thead>
         <tbody>
          
           @foreach ($adata as $i=> $blog)
         
           <tr class=" border-b bg-gray-900 border-gray-700 text-white font-semibold">
              <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                 {{$i}}
              </th>
              <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
               {{$blog->id}}
            </th>
              <td class="px-3 py-4">
                @if(  $blog->status == 1)
                <p class="text-green-500">Approved</p>
               @else
               <p class="text-red-500">Not Approved</p>
                

                @endif
              </td>
              <td class="px-3 py-4">
                 @if(  $blog->g_status == 1)
                 <p class="text-green-500">Uploaded</p>
              @else
              <p class="text-red-500">Not Uploaded</p>
               

               @endif
              </td>
              <td class="px-3 py-4">
                 {{$blog->category}}
              </td>
              <td class="px-3 py-4">
                 {{$blog->location}}
              </td>
              <td>
               <img src="{{ asset('blog_images/'.$blog->image) }}" style="height: 50px;width:50px;">
                                    
              </td>
              
              <td class="px-3 py-4 text-justify">
                 {{$blog->title}}
              </td>
              <td class="px-3 py-4">
                 {{$blog->user_name}}
              </td>
              <td class="px-3 py-4">
                 {{$blog->date}}
              </td>
              <td class="px-1 py-4 text-center">
               <a href="{{url('delete_b/'.$blog->id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>
                 @if(  $blog->status == 1)
                 <a href="{{url('update_b_status_0/'.$blog->id)}}" class="font-medium text-orange-400 dark:text-orange-500 hover:underline">Revoke</a><br>
                 @else
                 <a href="{{url('update_b_status_1/'.$blog->id)}}" class="font-medium text-blue-500 dark:text-blue-600 hover:underline">Approve</a><br>
                 @endif
                
                
                
              </td>
             
          </tr>
           @endforeach
            
         </tbody>
     </table>
     <div class="p-2  ">
      {!! $adata->links() !!}
    
   </div>
   </div>
</div> 

   </div>

   {{-- blogs category location and edit section ends --}}
   
 </div>

@stop  