<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lookin Dharamshala| Dharamshala Blogs</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    @foreach ($blog_data as $blog)
    <meta name="description" content="{{ $blog->location }}:{{ $blog->title }}" />
    <meta name="keywords" content="{{ $blog->location }},{{ $blog->title }}, Dharamshala Blogs, Dharamshala tourist attractions, dharamshala ,lookin dharamshala Things to do in Dharamshala, ookin , look in , lookin dharamshala,Dharamshala travel tips , dharamshalacity , Dharamshala adventure activities" />
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
{{-- sidebar --}}
<section class=" w-full ">

    <div class="flex flex-no-wrap">
        <!-- Sidebar starts -->
        <!-- Remove class [ hidden ] and replace [ sm:flex ] with [ flex ] -->
      
        {{-- <x-crousel :text="$place->location" :image="'places_images/'.$place->file" :url="'tourist_places/'.urlencode($place->heading)"/> --}}
    
      
            <x-blogs_sidebar :cats="$cats" :locations="$locs"/>
            <!-- Sidebar ends -->
        <!-- Remove class [ h-64 ] when adding a card block -->
        <div class="container mx-auto  h-auto md:w-4/5 w-11/12 ">
            <!-- Remove class [ border-dashed border-2 border-gray-300 ] to remove dotted border -->
            <div class="w-full h-full ">
               
               {{-- blogs section starts --}}
               <section class="bg-white p-5">
                @foreach ($blog_data as $blog)
               <div class="flex flex-col lg:p-5 md:p-5 sm:p-2 p-1">
                <div class="flex items-center justify-center">
                   
                        <h1 class="text-2xl font-bold text-blue-700">{{ $blog->title }}</h1>
                       
                    
                </div>
                <div class="flex lg:flex-row md:flex-row sm:flex-row flex-col ">
                    <div class="lg:w-1/2 md:w-1/2 w-full flex  flex-col gap-2  lg:p-2 md:p-2 sm:p-1 p-1">
                    
    <div class=" w-full  h-72 lg:p-2 md:p-2 sm:p-1 p-0">
        <img src="{{ asset('blog_images/'.$blog->image) }}" class="image_crousel transform transition hover:scale-105 duration-500 ease-in-out cursor-pointer " alt={{ $blog->location }}>
    </div>
    {{-- crousel --}}
    <div id="default-carousel" class="relative  w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative  overflow-hidden rounded-xl h-72 ">
             <!-- Item 1 -->
             @foreach ($gallery as $data)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('blogs_gallery/'.$data->image) }}" class="image_crousel  rounded-2xl transform transition hover:scale-105 duration-500 ease-in-out cursor-pointer absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt={{ $blog->location }}>
            </div>
            @endforeach
            <!-- Item 2 -->
            
        </div>
        <!-- Slider indicators -->
       
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
                       @if ($blog->location != 0)
                       <h1 class="text-justify text-rose-500 text-3xl font-semibold leading-tight ">{{ $blog->location }}</h1>
                           
                       @endif
                        <h1 class="text-justify text-gray-800 text-2xl font-semibold leading-tight ">{{ $blog->title }}</h1>
                        
                        <div class="flex lg:flex-row md:flex-row sm:flex-col flex-col gap-x-2 justify-between mt-2"><p class="text-blue-800 font-bold text-sm">Published on {{ $blog->date }}</p>
                            <a href={{'/user_blogs/'.urlencode($blog->user_name) }} class="text-rose-500 font-bold text-sm">Published by {{ $blog->user_name }}</a>
                        
                        </div>
                      
                        <div class="lg:p-2 md:p-2 sm:p-1 p-0">
                            <h1 class="text-lg leading-tight text-justify">{{ $blog->description }}</h1>
                        </div>
                        <div class="py-4 ">
                            <div class="social-btn-sp flex w-full items-center justify-center">
                                {!! $share !!}
                         </div>
                           
                        </div>
                    </div>
                </div>
               
                <div class="lg:p-2 md:p-2 sm:p-1 p-0">
                    <h1 class="text-lg leading-tight text-justify">{{ $blog->additional_description }}</h1>
                </div>
              
               </div>
                  
               {{-- gallery --}}
               <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:gap-2 md:gap-2 sm:gap-2 gap-2  p-1 mt-2">
                @foreach ($gallery as $data)
                    <img class="lg:h-60 md:h-60 sm:h-48 h-48 w-full rounded-lg object-cover transform transition hover:scale-105 duration-500 ease-in-out" src="{{ asset('blogs_gallery/'.$data->image) }}" alt={{ $blog->location }}>
               @endforeach
               </div>
                    {{-- gallery ends --}}
                @endforeach
            </section>
    {{-- category data --}}
    <section class=" p-2">
        <div class="container mx-auto   p-2">
            <div class="px-2 ">
               
                  <h1 class="text-3xl text-center  leading-tight text-gray-900  font-bold transform transition hover:scale-105 duration-500 ease-in-out cursor-pointer  duration-400 hover:text-yellow-400 ">
                          More Related Tourist Places </h1>
                        
                        </div>
    
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:gap-6 md:gap-6 sm:gap-4 gap-4 lg:p-4 sm:p-1 mt-1">
                            <!-- Card starts -->
                            @foreach ($cat as  $c_d)
                            <div class=" mx-auto bg-white shadow-xl shadow-blue-200 rounded-xl overflow-hidden">
                                <img src="{{ asset('blog_images/'.$c_d->image) }}" alt={{ $c_d->category }} class="w-full h-60 transform transition hover:scale-105 duration-500 ease-in-out">
                                <div class="p-2">
                                    <a href={{'/blog/'.urlencode($c_d->title) }}> <h1 class="text-xl text-blue-700 mb-2 text-justify">{{ Str::limit($c_d->title,65) }}</h1></a>
                                    <div class="flex lg:flex-row md:flex-row sm:flex-col flex-col  "><p class="text-blue-800  text-xs">Published on {{ $c_d->date }}</p>
                                        <a href={{'/user_blogs/'.urlencode($c_d->user_name) }}><p class="text-rose-500  text-xs  hover:scale-105">Blog By {{ $c_d->user_name }}</p></a>
                                    
                                    </div>
                                     <a href={{'/blog/'.urlencode($c_d->title) }}><p class="text-gray-700 mt-2 text-justify">{{ Str::limit($c_d->description,100) }}</p></a>
                                     <a href={{'/blog/'.urlencode($c_d->title) }} class="block mt-4 text-blue-500 hover:text-blue-600 hover:scale-105">Read more</a>
                                   </div>
                              </div>
                              @endforeach
                            <!-- Card ends -->
                            
                              
                             
                            
                             
                          
                      
                          </div>
                          <div class="p-2  ">
                            {!! $cat->links() !!}
                          
                         </div>     
                   
    
    
    
    
    
    
    
    
        </div>
    </section>
               
                 {{-- blogssection ends --}}
            </div>
        </div>
    </div>
    
    
  
    
  </section>
{{-- sidebar ends --}}
<div class="bubbles">
    <div class="bubble bg-rose-600"></div>
  
  <div class="bubble bg-slate-900"></div>
  <div class="bubble bg-sky-600"></div>
  <div class="bubble bg-indigo-600"></div>
  <div class="bubble bg-lime-600"></div>
  <div class="bubble bg-orange-600"></div>
  <div class="bubble bg-yellow-600"></div>
  <div class="bubble bg-emerald-600"></div>
  <div class="bubble bg-pink-600"></div>
</div>

{{-- share  --}}
{{-- share --}}
{{-- category data ends --}}
    @include('components/footer')
</body>

</html>