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


      {{-- blogs add satarts --}}

{{-- blogs add ends --}}





    </div>
  
   
    <div class="w-full p-4 ">
      
      <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">Add Places Location</p>
      <div class="h-full  w-full  flex flex-col  items-center justify-center ">
        {{-- message block starts --}}
        <div class="flex items-start  w-full justify-start">
       
         @if(session()->has('delete_msg'))
  
         <div id="toast-top-right" class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-100 bg-rose-600 divide-x  rounded-lg shadow top-5 right-5 dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">
            <div class="text-sm font-normal">{{ session()->get('delete_msg') }}</div>
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
       {{-- form for add location starts --}}
          <form action="add_places_loc" method="post" class="lg:w-3/4 md:w-3/4 sm:w-3/4 w-full bg-white p-4  rounded-lg shadow-lg  ">
              @csrf  
              @method('post') 
              <div class="mb-4">
                <label for="email" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Add Place Location</label>
                <input type="text" name="location" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="eg:Bhagsu , Kareri etc">
                @if($errors->has('location'))
              <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('location') }}</p>
  @endif
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
          {{-- form for add loc ends --}}
      </div>
  </div>
   {{-- blogs location and edit section starts --}}
   <div class="w-full p-4 ">
      
      <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">Added Tourist Location</p>
      
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
         <table class="w-full text-sm text-left text-gray-500 ">
             <thead class="text-xs text-gray-100 uppercase bg-gray-700 ">
                 <tr>
                     <th scope="col" class="px-6 py-3">
                        Index
                     </th>
                     <th scope="col" class="px-6 py-3">
                       Location
                     </th>
                     
                     <th scope="col" class="px-6 py-3">
                         Action
                     </th>
                 </tr>
             </thead>
             <tbody>
               @foreach ($data as $i=> $location)
               <tr class=" border-b bg-gray-900 border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap text-white">
                     {{$i}}
                  </th>
                  <td class="px-6 py-4">
                     {{$location->location}}
                  </td>
                
                  <td class="px-6 py-4">
                      <a href="{{url('delete_t_loc/'.$location->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                     
                  </td>
              </tr>
      
              
              @endforeach
                 
                
             </tbody>
         </table>
        
      </div>


   </div>

   {{-- blogs location and edit section ends --}}
 </div>
 <div class="p-2">
   {!! $data->links() !!}
</div>
@stop  