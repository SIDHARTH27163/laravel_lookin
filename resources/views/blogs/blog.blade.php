<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lookin Dharamshala</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    @foreach ($blog_data as $blog)
    <meta name="description" content="{{ $blog->location }}:{{ $blog->title }}" />
    <meta name="keywords" content="{{ $blog->location }},{{ $blog->title }}, Dharamshala tourist attractions, dharamshala ,lookin dharamshala Things to do in Dharamshala, ookin , look in , lookin dharamshala,Dharamshala travel tips , dharamshalacity , Dharamshala adventure activities" />
    <meta name="author" content="Lookin Dharamshala" />
    <link rel="canonical" href={{ request()->url() }} />
    <meta name="generator" content="All in One SEO (AIOSEO) 4.3.8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="lookindharamshala: Lookin Dharamshala , lookindharamshala,Latest Blogs, Blogs , Tourist Destinations , lookindharamshala &amp; Records | What You Want We Have It" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="lookindharamshala.com" />
    <meta property="og:description" content="What You Want We Have It." />
    <meta property="og:url" content={{ request()->url() }} />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="lookindharamshala.com" />
    <meta name="twitter:description" content="What You Want We Have It." />
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

     <!-- jQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endforeach


    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/css/output.css')
    <!-- Scripts -->
    
    @vite('resources/js/app.js')
    <style>
        #social-links ul{
             padding-left: 0;
             margin: 1px;
        }
        #social-links ul li {
             display: inline-block;
             margin: 1px;
        } 
        #social-links ul li a {
             padding: 4px;
             border: 1px solid #ccc;
             border-radius: 5px;
             margin:0.5em;
             font-size: 20px;
        }
        #social-links .fa-facebook{
              color: #5390eb;
        }
        #social-links .fa-twitter{
              color: deepskyblue;
        }
        #social-links .fa-linkedin{
              color: #0e76a8;
        }
        #social-links .fa-whatsapp{
             color: #25D366
        }
        #social-links .fa-reddit{
             color: #FF4500;;
        }
        #social-links .fa-telegram{
             color: #0088cc;
        }
        </style>
</head>
<body class="leading-normal tracking-normal " style="font-family: 'Source Sans Pro', sans-serif;">
    @include('components/header')
    {{-- banner starts --}}
    <section class="" id="banner">




        @include('components/blogs_banner')
        
        
        </section>
        <section class="bg-white p-5">
            @foreach ($blog_data as $blog)
           <div class="flex flex-col lg:p-5 md:p-5 sm:p-2 p-1">
            <div class="flex items-center justify-center">
               
                    <h1 class="text-3xl font-bold text-blue-400">{{ $blog->title }}</h1>
                   
                
            </div>
            <div class="flex lg:flex-row md:flex-row sm:flex-row flex-col ">
                <div class="lg:w-1/2 md:w-1/2 w-full flex lg:flex-row md:flex-row flex-col gap-5  lg:p-5 md:p-5 sm:p-2 p-1">
                
<div class="lg:w-1/2 md:w-1/2 sm:w-full w-full  h-72 lg:p-2 md:p-2 sm:p-1 p-0">
    <img src="{{ asset('blog_images/'.$blog->image) }}" class="image_crousel hover:scale-105 duration-500 ease-in-out cursor-pointer " alt={{ $blog->location }}>
</div>
{{-- crousel --}}
<div id="default-carousel" class="relative lg:w-1/2 md:w-1/2 sm:w-full w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative  overflow-hidden rounded-xl h-72 ">
         <!-- Item 1 -->
         @foreach ($gallery as $data)
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('blogs_gallery/'.$data->image) }}" class="image_crousel  rounded-2xl hover:scale-105 duration-500 ease-in-out cursor-pointer absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt={{ $blog->location }}>
        </div>
        @endforeach
        <!-- Item 2 -->
        
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
{{-- crousel ends --}}
                </div>
                <div class="lg:w-1/2 md:w-1/2 w-full lg:p-5 md:p-5 p-2 ">
                    <h1 class="text-justify text-rose-500 text-3xl font-semibold leading-tight ">{{ $blog->location }}</h1>
                    <h1 class="text-justify text-gray-800 text-xl font-semibold leading-tight ">{{ $blog->title }}</h1>
                    
                    <div class="flex lg:flex-row md:flex-row sm:flex-col flex-col gap-x-2 "><p class="text-blue-800 font-bold text-sm">Published on {{ $blog->date }}</p>
                        <p class="text-rose-500 font-bold text-sm">Published by {{ $blog->user_name }}</p>
                    
                    </div>
                    <div class=" ">
                        <div class="social-btn-sp flex w-full items-center justify-center">
                            {!! $share !!}
                     </div>
                       
                    </div>
                    <div class="lg:p-2 md:p-2 sm:p-1 p-0">
                        <h1 class="text-lg leading-tight text-justify">{{ $blog->description }}</h1>
                    </div>
                </div>
            </div>
           
            <div class="lg:p-2 md:p-2 sm:p-1 p-0">
                <h1 class="text-lg leading-tight text-justify">{{ $blog->additional_description }}</h1>
            </div>
          
           </div>
              
           {{-- gallery --}}
           <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:gap-6 md:gap-6 sm:gap-2 gap-2 lg:p-5 md:p-5 sm:p-2 p-1 mt-4">
            @foreach ($gallery as $data)
                <img class="lg:h-60 md:h-60 sm:h-48 h-48 w-full rounded-lg object-cover transform transition hover:scale-105 duration-500 ease-in-out" src="{{ asset('blogs_gallery/'.$data->image) }}" alt={{ $blog->location }}>
           @endforeach
           </div>
                {{-- gallery ends --}}
            @endforeach
        </section>
{{-- category data --}}
<section class="lg:p-5 md:p-5 sm:p-4 p-2">
    <div class="container mx-auto  lg:p-5 md:p-5 sm:p-4 p-2">
        <div class="px-2 ">
           
              <h1 class="text-3xl text-center  leading-tight text-gray-900  font-bold transform transition hover:scale-105 duration-500 ease-in-out cursor-pointer  duration-400 hover:text-yellow-400 ">
                      More Related Tourist Places </h1>
                    
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:gap-6 md:gap-6 sm:gap-4 gap-4 lg:p-4 sm:p-1 mt-4">
                        <!-- Card starts -->
                        @foreach ($cat as  $c_d)
                        <div class=" mx-auto bg-white shadow-xl shadow-blue-200 rounded-xl overflow-hidden">
                            <img src="{{ asset('blog_images/'.$c_d->image) }}" alt={{ $c_d->location }} class="w-full h-60 ">
                            <div class="p-2">
                                <a href={{'/blog/'.urlencode($c_d->title) }}> <h1 class="text-xl font-semibold mb-2 text-justify">{{ Str::limit($c_d->title,65) }}</h1></a>
                                 <div class="flex lg:flex-row md:flex-row sm:flex-col flex-col gap-x-2 "><p class="text-blue-800 font-bold text-sm">Published on {{ $c_d->date }}</p>
                                   <a href={{'/user_blogs/'.urlencode($c_d->user_name) }}><p class="text-rose-500 font-bold text-sm hover:scale-105">Published by {{ $c_d->user_name }}</p></a>
                               
                               </div>
                                 <a href={{'/blog/'.urlencode($c_d->title) }}><p class="text-gray-700 mt-2 text-justify">{{ Str::limit($c_d->description,100) }}</p></a>
                                 <a href={{'/blog/'.urlencode($c_d->title) }} class="block mt-4 text-blue-500 hover:text-blue-600 hover:scale-105">Read more</a>
                               </div>
                          </div>
                          @endforeach
                        <!-- Card ends -->
                        
                          
                         
                        
                         
                      
                  
                      </div>
                          
               








    </div>
</section>

{{-- share  --}}
{{-- share --}}
{{-- category data ends --}}
    @include('components/footer')
</body>

</html>