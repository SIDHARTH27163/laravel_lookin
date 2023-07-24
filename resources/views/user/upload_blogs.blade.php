@extends('user.layouts.user_layout')  
@section('content')  
<div class="p-4 ">

    <div class="w-full p-4 bg-white">
      
        <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">Upload Blog Here</p>
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
            <form action="upload_blog" method="post" class=" w-full bg-white p-4  rounded-lg shadow-lg  " enctype="multipart/form-data">
                @csrf  
                @method('post') 
                <div class="flex lg:flex-row md:flex-row sm:flex-col flex-col justify-between gap-x-3">
               
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
</div>
@stop