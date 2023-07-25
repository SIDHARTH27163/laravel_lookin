<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lookin Dharamshala| Dharamshala Blogs</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
  
    <meta name="description" content="" />
    <meta name="keywords" content=" Dharamshala tourist attractions, Dharamshala Blogs, dharamshala ,lookin dharamshala Things to do in Dharamshala, ookin , look in , lookin dharamshala,Dharamshala travel tips , dharamshalacity , Dharamshala adventure activities" />
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



    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/css/output.css')
    <!-- Scripts -->
    
    @vite('resources/js/app.js')
</head>
<body class="leading-normal tracking-normal " style="font-family: 'Source Sans Pro', sans-serif;">
    @include('components/header')
    {{-- banner starts --}}
    <section class="" id="banner">



        @include('components/blogs_banner')
        
        </section>
       

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
             <section class="p-2">
                <div class="container mx-auto  p-2">
                    <div class="px-2 ">
                        <h2 class="text-center text-lg text-orange-500 leading-tight cursor-pointer transform transition hover:scale-105 duration-500 ease-in-out   font-normal">Search Results</h2>
                          <h1 class="text-3xl text-center  leading-tight text-gray-900  font-bold transform transition hover:scale-105 duration-500 ease-in-out cursor-pointer  duration-400 hover:text-yellow-400 ">
                                  Our Blogs</h1>
                                <div class="flex items-center justify-center">
                                <p class="text-gray-700  text-base lg:w-3/4 md:w-3/4 sm:w-full w-full cursor-pointer  text-justify">
                                    Welcome to our captivating blog series, exclusively brought to you by Lookin Dharamshala! Join us on an exhilarating journey as we uncover the hidden gems, cultural treasures, and breathtaking adventures waiting to be discovered in the picturesque town of Dharamshala.
                                        </p> 
                        </div>
                                </div>
            
                                <div class="w-full p-1 text-xl text-center text-rose-500 font-bold mt-1"> {{ $message }}</div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:gap-6 md:gap-6 sm:gap-4 gap-4 p-1 mt-2">
                                    <!-- Card starts -->
                                    @foreach ($filter_data as $i=>  $blog)
                                    <div class=" mx-auto bg-white shadow-xl shadow-blue-200 rounded-xl overflow-hidden">
                                        <a href={{'/blog/'.urlencode($blog->title) }}> <img src="{{ asset('blog_images/'.$blog->image) }}" alt={{ $blog->location }} class="w-full h-60 transform transition hover:scale-105 duration-500 ease-in-out"></a>
                                         <div class="p-2">
                                          <a href={{'/blog/'.urlencode($blog->title) }}> <h1 class="text-xl text-blue-700 mb-2 text-justify">{{ Str::limit($blog->title,65) }}</h1></a>
                                          <div class="flex lg:flex-row md:flex-row sm:flex-col flex-col gap-x-1 "><p class="text-blue-800  text-xs">Published on {{ $blog->date }}</p>
                                            <a href={{'/user_blogs/'.urlencode($blog->user_name) }}><p class="text-rose-500  text-xs  hover:scale-105">Blog By {{ $blog->user_name }}</p></a>
                                        
                                        </div>
                                         <a class="flex flex-row text-blue-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-800">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                                          </svg>{{ $blog->location }}</a>
                                           <a href={{'/blog/'.urlencode($blog->title) }}><p class="text-gray-700 mt-2 text-justify">{{ Str::limit($blog->description,100) }}</p></a>
                                           <a href={{'/blog/'.urlencode($blog->title) }} class="block mt-4 text-blue-500 hover:text-blue-600 hover:scale-105">Read more</a>
                                         </div>
                                       </div>
                                      @endforeach
                                    <!-- Card ends -->
                                    
                                      
                                  
                                    
                                     
                                  
                              
                                  </div>
                                      
                           
            
            
            
            
            
            
            
            
                </div>
                <div class="p-2  ">
                    {!! $filter_data->links() !!}
                  
                 </div>
            </section>
             
               {{-- blogssection ends --}}
          </div>
      </div>
  </div>
  
  

  
</section>

{{-- category data ends --}}
    @include('components/footer')
</body>

</html>