@extends('admin.layouts.master')  
@section('content')  
<div class="p-4  rounded-lg  border-2 border-slate-900 border-dashed h-auto">
    <div class="grid grid-cols-3 gap-4 mb-4">
       <div class="flex items-center justify-center h-24 rounded  bg-rose-600">
          <p class="text-2xl text-gray-400 ">
             <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
             </svg>
          </p>
       </div>
       <div class="flex items-center justify-center h-24 rounded  bg-orange-600">
          <p class="text-2xl text-gray-400 ">
             <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
             </svg>
          </p>
       </div>
       <div class="flex items-center justify-center h-24 rounded  bg-green-600">
          <p class="text-2xl text-gray-400 ">
             <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
             </svg>
          </p>
       </div>


   




    </div>
  
   
    <div class="w-full p-4 ">
      
      <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">Add Tourist Places</p>
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
          <form action="add_tourist_places" method="post" class=" w-full bg-white p-4  rounded-lg shadow-lg  " enctype="multipart/form-data">
              @csrf  
              @method('post') 
              <div class="flex lg:flex-row md:flex-row sm:flex-col flex-col justify-between gap-x-3">
               <div class="mb-4 w-full">
                  <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Select  Location</label>
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
                  <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Select  Category</label>
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
                  <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Add Place Heading</label>
                  <textarea rows="3" type="text" name="heading" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Tourist Place Heading Here"></textarea>
                  @if($errors->has('heading'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('heading') }}</p>
    @endif
                </div>
                <div class="mb-4 w-full">
                  <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Add Place Description</label>
                  <textarea rows="3" type="text" name="description" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Tourist Place Description Here"></textarea>
                  @if($errors->has('description'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('description') }}</p>
    @endif
                </div>
                <div class="mb-4 w-full">
                    <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Add Place Aditional Description</label>
                    <textarea rows="3" type="text" name="aditional_description" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Tourist Place Aditional Description Here"></textarea>
                    @if($errors->has('aditional_description'))
                  <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('aditional_description') }}</p>
      @endif
                  </div>


              </div>
              <div class="flex lg:flex-row md:flex-row sm:flex-col flex-col justify-between gap-x-3">
                <div class="mb-4 w-full">
                    <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">District</label>
                    <input type="text" name="district" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:Kangra etc">
                    @if($errors->has('district'))
                  <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('district') }}</p>
      @endif
                  </div>
                  <div class="mb-4 w-full">
                    <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Best Time To Visit</label>
                    <input type="text" name="best_time" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:August , Summer , Monsoon , Months etc">
                    @if($errors->has('best_time'))
                  <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('best_time') }}</p>
      @endif
                  </div>
              </div>
              <div class="flex lg:flex-row md:flex-row sm:flex-col flex-col justify-between gap-x-3">
               <div class=" w-full mb-4">
                  <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Select Tourist Place Cover Image</label>
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
      
      <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2"> Un-Approved Tourist Places</p>
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
                        Heading
                    </th>
                    <th scope="col" class="px-3 py-3">
                     District
                  </th>
                    <th scope="col" class="px-3 py-3">
                     Best Time
                 </th>
                 
                
              <th scope="col" class="px-3 py-3">
              Action
            </th>
                 </tr>
             </thead>
             <tbody>
               @foreach ($udata as $i=> $place)
         
               <tr class=" border-b bg-gray-900 border-gray-700 text-white font-semibold">
                  <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                     {{$i}}
                  </th>
                  <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                     {{$place->id}}
                  </th>
                  <td class="px-3 py-4">
                    @if(  $place->status == 1)
                    <p class="text-green-500">Approved</p>
                   @else
                   <p class="text-red-500">Not Approved</p>
                    
    
                    @endif
                  </td>
                  <td class="px-3 py-4">
                     @if(  $place->g_status == 1)
                     <p class="text-green-500">Uploaded</p>
                  @else
                  <p class="text-red-500">Not Uploaded</p>
                   
    
                   @endif
                  </td>
                  <td class="px-3 py-4">
                     {{$place->category}}
                  </td>
                  <td class="px-3 py-4">
                     {{$place->location}}
                  </td>
                  <td>
                   <img src="{{ asset('places_images/'.$place->file) }}" style="height: 50px;width:50px;">
                                        
                  </td>
                  
                  <td class="px-3 py-4">
                     {{$place->heading}}
                  </td>
                  <td class="px-3 py-4">
                     {{$place->district}}
                  </td>
                  <td class="px-3 py-4">
                     {{$place->best_time}}
                  </td>
                  <td class="px-1 py-4 text-center">
                     <a href="{{url('delete_t/'.$place->id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>
                     @if(  $place->status == 1)
                     <a href="{{url('update_t_status_0/'.$place->id)}}" class="font-medium text-orange-400 dark:text-orange-500 hover:underline">Revoke</a><br>
                     @else
                     <a href="{{url('update_t_status_1/'.$place->id)}}" class="font-medium text-blue-500 dark:text-blue-600 hover:underline">Approve</a><br>
                     @endif
                    
    
                     <a href="{{url('upload_t_gallery/'.$place->id)}}" class="font-medium text-green-400 dark:text-green-500 hover:underline">Upload Gallery</a><br>
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
      
   <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2"> Approved Places</p>
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
                    Heading
                </th>
                <th scope="col" class="px-3 py-3">
                  District
               </th>
                 <th scope="col" class="px-3 py-3">
                  Best Time
              </th>
             
            
          <th scope="col" class="px-3 py-3">
          Action
        </th>
             </tr>
         </thead>
         <tbody>
            @foreach ($adata as $i=> $place)
         
            <tr class=" border-b bg-gray-900 border-gray-700 text-white font-semibold">
               <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                  {{$i}}
               </th>
               <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                  {{$place->id}}
               </th>
               <td class="px-3 py-4">
                 @if(  $place->status == 1)
                 <p class="text-green-500">Approved</p>
                @else
                <p class="text-red-500">Not Approved</p>
                 
 
                 @endif
               </td>
               <td class="px-3 py-4">
                  @if(  $place->g_status == 1)
                  <p class="text-green-500">Uploaded</p>
               @else
               <p class="text-red-500">Not Uploaded</p>
                
 
                @endif
               </td>
               <td class="px-3 py-4">
                  {{$place->category}}
               </td>
               <td class="px-3 py-4">
                  {{$place->location}}
               </td>
               <td>
                <img src="{{ asset('places_images/'.$place->file) }}" style="height: 50px;width:50px;">
                                     
               </td>
               
               <td class="px-3 py-4">
                  {{$place->heading}}
               </td>
               <td class="px-3 py-4">
                  {{$place->district}}
               </td>
               <td class="px-3 py-4">
                  {{$place->best_time}}
               </td>
               <td class="px-1 py-4 text-center">
                  <a href="{{url('delete_t/'.$place->id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>
                  @if(  $place->status == 1)
                  <a href="{{url('update_t_status_0/'.$place->id)}}" class="font-medium text-orange-400 dark:text-orange-500 hover:underline">Revoke</a><br>
                  @else
                  <a href="{{url('update_t_status_1/'.$place->id)}}" class="font-medium text-blue-500 dark:text-blue-600 hover:underline">Approve</a><br>
                  @endif
                 
 
                  <a href="{{url('upload_t_gallery/'.$place->id)}}" class="font-medium text-green-400 dark:text-green-500 hover:underline">Upload Gallery</a><br>
               </td>
              
           </tr>
            @endforeach
          
         </tbody>
      </table>
      <div class="p-2 ">
         {!! $adata->links() !!}
      </div>
   </div>
</div> 

   </div>

   {{-- blogs category location and edit section ends --}}
   
 </div>

@stop  