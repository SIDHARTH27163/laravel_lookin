@extends('admin.layouts.master')  
@section('content')  
<div class="p-4 border-2 border-dashed rounded-lg border-gray-700 ">
    <div class="grid grid-cols-3 gap-4 mb-4">
       <a href="#unapproved" class="cursor-pointer transform transition hover:scale-105 duration-500 ease-in-out">
         <div class="flex flex-col items-center justify-center h-24 rounded  bg-rose-600">
            <p class="text-2xl text-gray-100 ">
              Unapproved Services
             </p>
             <p class="text-2xl text-gray-100 ">
               {{ $ucount }}
             </p>
          </div>
       </a>
       <a href="#approved" class="cursor-pointer transform transition hover:scale-105 duration-500 ease-in-out">
         <div class="flex flex-col items-center justify-center h-24 rounded  bg-green-600">
            <p class="text-2xl text-white ">
              Approved Services
             </p>
             <p class="text-2xl text-white ">
               {{ $acount }}
             </p>
          </div>
       </a>
       <a href="#approved" class="cursor-pointer transform transition hover:scale-105 duration-500 ease-in-out">
       <div class="flex flex-col items-center justify-center h-24 rounded  bg-blue-500">
         <p class="text-2xl text-gray-100 ">
           Total Services Added
          </p>
          <p class="text-2xl text-gray-100 ">
            {{ $total}}
          </p>
       </div></a>
    </div>
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
    <p class="text-2xl italic underline font-bold">Add Service Here</p>
    <div class="flex items-center justify-center h-auto p-2 mb-4 rounded  bg-amber-600">
       {{-- forn starts --}}
      
<form action="add_service" method="post" class="bg-white p-5 w-3/4 rounded-lg" enctype="multipart/form-data">
   @csrf  
   @method('post') 
   <div class="relative z-0 w-full mb-2 group">
       <input type="text" name="service_name" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
       <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Service Name</label>
   </div>
   @if($errors->has('service_name'))
   <p class="text-sm italic text-red-500 text-start font-semibold my-2">{{ $errors->first('service_name') }}</p>
@endif
   <div class="relative z-0 w-full mb-2 group">
       <input type="file" name="image" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
       <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Service Image</label>
   </div>
   @if($errors->has('image'))
   <p class="text-sm italic text-red-500 text-start font-semibold my-2">{{ $errors->first('image') }}</p>
@endif
   <div class="relative z-0 w-full mb-2 group">
       <input type="text" name="page_link" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
       <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Page Link</label>
   </div>
   @if($errors->has('page_link'))
   <p class="text-sm italic text-red-500 text-start font-semibold my-2">{{ $errors->first('page_link') }}</p>
@endif
   <div class="grid md:grid-cols-1 ">
     <div class="relative z-0 w-full mb-1 group">
      <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Service Description</label>
      <textarea id="message" name="description" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write Heading here..."></textarea>
     </div>
     @if($errors->has('description'))
     <p class="text-sm italic text-red-500 text-start font-semibold my-2">{{ $errors->first('description') }}</p>
@endif
   </div>
   <button  class="text-white mt-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
   </div>
   
   <div class="w-full p-4 ">
      
      <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">Un Approved Services</p>
      <div class="relative overflow-auto shadow-md sm:rounded-lg" id="unapproved">
         <table class="w-full text-sm text-left text-gray-500 ">
             <thead class="text-xs text-gray-100 uppercase bg-rose-600 ">
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
                        Service Name
                    </th>
                     
                      </th>
                      
                     <th scope="col" class="px-3 py-3">
                       Page Link
                     </th>
                     
                    
                     <th scope="col" class="px-3 py-3">
                       Image
                    </th>

                    
                  
                 
                
              <th scope="col" class="px-3 py-3">
              Action
            </th>
                 </tr>
             </thead>
             <tbody>
              
               @foreach ($servicedata as $i=> $service)
              
               <tr class=" border-b bg-gray-900 border-gray-700 text-white font-semibold">
                  <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                     {{$i}}
                  </th>
                  <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                     {{$service->id}}
                  </th>
                  <td class="px-3 py-4">
                    @if(  $service->status == 1)
                    <p class="text-green-500">Activated</p>
                   @else
                   <p class="text-red-500">Not Activated</p>
                    

                    @endif
                  </td>
                  <td class="px-3 py-4">
                     {{$service->service_name}}
                  </td>
                 
                  <td class="px-3 py-4">
                     {{$service->page_link}}
                  </td>
                
                 
                  <td>
                     <img src="{{ asset('service_images/'.$service->image) }}" style="height: 50px;width:50px;">
                                          
                    </td>
                 
                    <td class="px-1 py-4 text-center">
                     <a href="{{url('delete_t/'.$service->id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>
                    
                    
                     <a href="{{url('change_service_status/'.$service->id)}}" class="font-medium text-blue-500 dark:text-blue-600 hover:underline">Activate</a><br>
                     
                    
    
                   
                  </td>
              </tr>
               @endforeach
                
             </tbody>
         </table>
         <div class="p-2 ">
            
            {!! $servicedata->links() !!}
         </div>
      </div>
</div> 
<div class="w-full p-4 ">
      
   <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">Approved Services</p>
   <div class="relative overflow-auto shadow-md sm:rounded-lg" id="approved">
      <table class="w-full text-sm text-left text-gray-500 ">
          <thead class="text-xs text-gray-100 uppercase bg-green-700 ">
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
                     Service Name
                 </th>
                   <th scope="col" class="px-3 py-3">
                     For
                   </th>
                   
                  <th scope="col" class="px-3 py-3">
                    Page Link
                  </th>
                  
                 
                  <th scope="col" class="px-3 py-3">
                    Image
                 </th>

                 
               
              
             
           <th scope="col" class="px-3 py-3">
           Action
         </th>
              </tr>
          </thead>
          <tbody>
           
            @foreach ($service_data as $i=> $service)
           
            <tr class=" border-b bg-gray-900 border-gray-700 text-white font-semibold">
               <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                  {{$i}}
               </th>
               <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                  {{$service->id}}
               </th>
               <td class="px-3 py-4">
                 @if(  $service->status == 1)
                 <p class="text-green-500">Activated</p>
                @else
                <p class="text-red-500">Not Activated</p>
                 

                 @endif
               </td>
               <td class="px-3 py-4">
                  {{$service->service_name}}
               </td>
               <td class="px-3 py-4">
                  @if(  $service->for_user == 1)
                  <p class="text-green-500">For All</p>
                 @else
                 <p class="text-red-500">Only Admin</p>
                  

                  @endif
                </td>
               <td class="px-3 py-4">
                  {{$service->page_link}}
               </td>
             
              
               <td>
                  <img src="{{ asset('service_images/'.$service->image) }}" style="height: 50px;width:50px;">
                                       
                 </td>
              
                 <td class="px-1 py-4 text-center">
                  <a href="{{url('delete_t/'.$service->id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>
                  @if(  $service->status == 1)
                  <a href="{{url('change_service_status/'.$service->id)}}" class="font-medium text-orange-400 dark:text-orange-500 hover:underline">Revoke</a><br>
                
                  @endif
                 
 
                  @if(  $service->for_user == 0)
                  <a href="{{url('change_to/'.$service->id)}}" class="font-medium text-orange-400 dark:text-orange-500 hover:underline">Change To All User</a><br>
                  @else
                  <a href="{{url('change_to/'.$service->id)}}" class="font-medium text-blue-500 dark:text-blue-600 hover:underline">Change To Only Admin</a><br>
                  @endif
               </td>
           </tr>
            @endforeach
             
          </tbody>
      </table>
      <div class="p-2 ">
         
         {!! $service_data->links() !!}
      </div>
   </div>
</div> 

       {{-- form ends --}}
    </div>
   
   
 </div>   
@stop  