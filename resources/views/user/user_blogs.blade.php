@extends('user.layouts.user_layout')  
@section('content')  
<div class="p-1 ">
    <p class="toggleColour text-red-600 text-2xl  font-bold underline py-2 text-center">List Of Uploaded Blogs</p>
   
      
      
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
           
            {{-- form ends --}}
        </div>
    
    <div class="w-full p-2 ">
      
        <p class="toggleColour text-red-800 text-2xl  font-bold underline py-2"> Blogs Waiting For Approvals</p>
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
                    <td class="px-3 py-4 text-justify">
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
                       <a href="{{url('upload_gallery/'.$ublog->id)}}" class="font-medium text-green-400 dark:text-green-500 hover:underline">Upload Gallery</a><br>
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
  {{-- approved blogs --}}
  <div class="w-full p-2 ">
      
   <p class="toggleColour text-green-600 text-2xl  font-bold underline py-2"> Approved Blogs</p>
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
            <td class="px-3 py-4">
               <a href="{{url('delete_b/'.$blog->id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>
             
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
  {{-- upproved blogs ends --}}
</div>
@stop