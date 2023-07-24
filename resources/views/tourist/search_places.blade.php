<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tourist Places In Dharamshala</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />

    <meta name="description" content="" />
    <meta name="keywords" content=" Dharamshala tourist attractions, dharamshala ,lookin dharamshala Things to do in Dharamshala, ookin , look in , lookin dharamshala,Dharamshala travel tips , dharamshalacity , Dharamshala adventure activities" />
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
<section class="" id="banner">

    @include('components/tourist_banner')


 
  </section>
{{-- banner ends --}}


{{-- sidebar --}}

<section class=" w-full ">

    <div class="flex flex-no-wrap">
        <!-- Sidebar starts -->
        <!-- Remove class [ hidden ] and replace [ sm:flex ] with [ flex ] -->
      
        {{-- <x-crousel :text="$place->location" :image="'places_images/'.$place->file" :url="'tourist_places/'.urlencode($place->heading)"/> --}}
    
      
            <x-tourist_sidebar :cats="$cats" :locations="$locs"/>
            <!-- Sidebar ends -->
        <!-- Remove class [ h-64 ] when adding a card block -->
        <div class="container mx-auto  h-auto md:w-4/5 w-11/12 ">
            <!-- Remove class [ border-dashed border-2 border-gray-300 ] to remove dotted border -->
            <div class="w-full h-full ">
               
               

                 {{-- tourist places starts --}}
                 <section class=" p-2">
                    <div class="   p-2">
                        <div class="px-1 ">
                           
                            <div class="  p-2 w-full overflow-hidden">
                                <h1 class="text-xl leading-tight  mt-2 font-bold transform transition hover:scale-105 duration-500 ease-in-out cursor-pointer text-center duration-400 text-orange-400 ">
                                    Tourist Destinations In Dharamshala</h1>
                                    <h1 class="text-3xl leading-tight text-gray-900  font-bold transform transition hover:scale-105 duration-500 ease-in-out cursor-pointer text-center duration-400 hover:text-yellow-400 ">
                                    Showing Results For Tourist Destinations</h1>
                                    <div class="flex items-center justify-center">
                                        <p class="text-gray-700  text-base lg:w-3/4 md:w-3/4 sm:w-full w-full cursor-pointer lg:text-center md:text-center sm:text-justify text-justify">
                                          Tourist places are popular destinations that attract visitors from around the world due to their unique features, cultural significance, historical importance, natural beauty, or recreational opportunities.
                                                </p> 
                                </div>
                               </div>
                                       <div class="w-full p-1 text-xl text-center text-rose-500 font-bold mt-5"> {{ $message }}</div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:gap-6 md:gap-6 sm:gap-4 gap-4  mt-2">
                                        <!-- Card starts -->
                                        @foreach ($search_data as  $f_d)
                                       

                                        <div class=" mx-auto bg-white shadow-lg` shadow-blue-100 rounded-xl overflow-hidden">
                                            <img src="{{ asset('places_images/'.$f_d->file) }}" alt={{ $f_d->location }} class="w-full lg:h-60 md:h-60 sm:h-56  h-44 ">
                                            <div class="p-2">
                                              <h1 class="lg:text-xl md:text-xl sm:taxt-lg text-base font-thin mb-2 text-justify">{{ Str::limit($f_d->heading,65) }}</h1>
                                             <div class="lg:visible md:visible sm:invisible invisible lg:h-auto md:h-auto h-0">
                                                <p class="text-blue-800 font-bold text-sm">Location {{ $f_d->location }}</p>
                                                <p class="text-gray-700 lg:mt-2 md:mt-2 mt-0 text-justify">{{ Str::limit($f_d->description,100) }}</p>
                                             </div>
                                              <a href={{'/tourist_places/'.urlencode($f_d->heading) }} class="block lg:mt-4 md:mt-4 sm:mt-2 mt-1 text-blue-500 hover:text-blue-600 hover:scale-105">Read more</a>
                                            </div>
                                          </div>
                                       
                                          @endforeach
                                        <!-- Card ends -->
                                       
                                          
                                         
                                        
                                         
                                      
                                  
                                      </div>
                                          
                               
                                    
                
                
                
                
              
                
                
                    </div>
                  
                </section>
                 {{-- tourist places ends --}}
            </div>
        </div>
    </div>
    
    

    
</section>
  {{-- features starts --}}
  @include('components/features')
  {{-- features ends --}}

{{-- sidebar ends --}}


@include('components/footer')
</body>





</html>