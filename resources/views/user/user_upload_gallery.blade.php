@extends('user.layouts.user_layout')  
@section('content')  
<div class="p-4 ">
    <div class="w-full p-4 ">
      
        <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">Upload Gallery For Your Blog</p>
        <div class="h-full  w-full  flex flex-col  items-center justify-center ">
           
           {{-- message block starts --}}
           <div class="flex items-start  w-full justify-start">
         
              @if(session()->has('message'))
       
              <div id="toast-top-right" class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-100 bg-green-600 divide-x  rounded-lg shadow top-5 right-5 dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">
                 <div class="text-sm font-normal">{{ session()->get('message') }}</div>
             </div>
              
                 
              @endif
              {{-- add message ends --}}
             </div>
            {{-- message Block ends --}}
           
  
        
          {{-- form starts --}}
            <form action="{{url('upload_blogs_gallery_user/'.$id)}}" method="post" method="post" enctype="multipart/form-data" class="lg:w-3/4 md:w-3/4 sm:w-3/4 w-full bg-white p-4  rounded-lg shadow-lg  ">
              
              @csrf  
                @method('post') 
                <div class="mb-4">
                  
                  <label for="email" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Select Files To Upload</label>
                  <input type="file" name="files[]" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  multiple>
                  @if($errors->has('files'))
                <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('files') }}</p>
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
            {{-- form ends --}}
        </div>
    </div>
    
   
</div>
@stop