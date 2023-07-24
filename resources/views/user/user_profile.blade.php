@extends('user.layouts.user_layout')  
@section('content')  
<div class="p-4 rounded-lg bg-gray-200">

   <div class="flex flex-col w-full items-center justify-center p-2">
    @if($errors->has('image'))
                  <p class="text-sm italic text-red-500 text-start font-semibold">{{ $errors->first('image') }}</p>
      @endif
      @if(session()->has('success'))
       
              <div id="toast-top-right" class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-100 bg-rose-600 divide-x  rounded-lg shadow top-5 right-5 dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">
                 <div class="text-sm font-normal">{{ session()->get('success') }}</div>
                 
             </div>
             
                
              @endif
    <div class=" mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        @if ($userdata->image == 0 )
          
           <div class="flex flex-col">
            <img class="w-full h-48 object-contain" src="{{ asset('images/user.png') }}" >
            <div class=" w-full ">
               <a  id="updateProductButton" data-modal-toggle="updateProductModal" class="flex items-center w-full justify-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                  </svg>
                  upload image
               </a>
            </div>
              
           </div>
        @else
        <div class="flex flex-col">
            <img class="w-full h-48 object-contain" src="{{ asset('profile_images/'.$userdata->image) }}" >
            <div class=" w-full mt-2">
               <a  id="updateProductButton" data-modal-toggle="updateProductModal" class="flex items-center w-full justify-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                  </svg>
                  Update Image
               </a>
            </div>
              
           </div>
        
            
        @endif
        {{-- <img class="w-full h-48 object-cover" src="{{ asset('profile_images/16901387845.jpg') }}" alt="Profile Image"> --}}
    
        <div class="p-4">
            <h1 class="text-xl font-semibold text-gray-800 uppercase">{{ $userdata->fname ." ".$userdata->lname }}</h1>
           
            <div class="flex mt-3">
                <div class="flex-1 text-gray-600">
                    <p>Email: {{ $userdata->email }}</p>
                    <p>Phone: {{ $userdata->phone }}</p>
                </div>
            </div>
            <div class="mt-2 flex flex-row gap-2 justify-between">
               
                <a  class="cursor-pointer px-4 py-2 bg-rose-500 text-white rounded hover:bg-green-600">Change Password</a>
                <a  class="cursor-pointer px-4 py-2 bg-rose-500 text-white rounded hover:bg-green-600">Add Details</a>
            </div>
        </div>
    </div>
    
   </div>
</div>

{{-- modal starts --}}
<div id="updateProductModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Upload Image
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="updateProductModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="/update_profile_img" method="post" enctype="multipart/form-data">
                @csrf  
                @method('post') 
                <div class="w-full">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Profile Image</label>
                        <input type="file" name="image" id="name" value="iPad Air Gen 5th Wi-Fi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ex. Apple iMac 27&ldquo;">
                    </div>
                   
                  
                </div>
                <div class="flex items-center space-x-4">
                    <button  class="text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        Upload Images
                    </button>
                  
                </div>
            </form>
        </div>
    </div>
</div>
{{-- modal ends for password--}}
@stop