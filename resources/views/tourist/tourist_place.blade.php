<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lookin Dharamshala</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    @foreach ($place_data as $place)
    <meta name="description" content="{{ $place->location }}:{{ $place->heading }}" />
    <meta name="keywords" content="{{ $place->location }},{{ $place->heading }}, Dharamshala tourist attractions, dharamshala ,lookin dharamshala Things to do in Dharamshala, ookin , look in , lookin dharamshala,Dharamshala travel tips , dharamshalacity , Dharamshala adventure activities" />
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
@endforeach


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




        <div class="relative  w-full  bg-cover bg-center bg-no-repeat bg-fixed " style="background-image:url('{{ asset('images/bg.jpg')}}')">
        
        
        <div class=" py-28 w-full  backdrop-brightness-50  ">
            {{-- container starts --}}
            {{-- <h1  class="text-yellow-400 font-bold text-h">Lookin Dharamshala</h1> --}}
            <div class=" container mx-auto lg:px-10 md:px-6 sm:px-4 px-4">
                <h1 class="leading-tight  font-bold  cursor-pointer text-yellow-400 ">
                            <span class="text-sky-300 text-h ">Lookin Dharamshala</span></h1>
                
                            <p class="text-white text-base text-justify mb-1 lg:w-1/2 md:w-1/2 sm:w-3/4 w-full cursor-pointer transform transition hover:scale-105 duration-500 ease-in-out ">
                            Welcome to our nature exploration website! We are passionate about showcasing the breathtaking beauty and wonders of the natural Dharamshala and Himachal Pardesh. Whether you're an avid adventurer, a nature enthusiast, or simply seeking solace in the great outdoors, our website is here to inspire and guide you on your journey.
                                </p>
                                <div class="lg:w-1/2 md:w-1/2 sm:w-3/4 w-full">
                                    <div class="backdrop-blur-sm bg-white/30 lg:w-1/2 md:w-1/2 sm:w-3/4 w-full ">
                                        <div
                                            class="bg-teal-950  w-1/2 p-2 text-white text-center cursor-pointer transform transition hover:scale-105 duration-500 ease-in-out">
                                            Explore</div>
                                    </div>
                                    {{-- forms start --}}

                                    <div
                                    class="backdrop-blur-sm bg-white/30 lg:w-3/4 md:w-3/4 sm:w-full w-full pt-2 px-2 pb-2 flex flex-col">
                                    <form class="w-full lg:px-10 md:px-8 px-5  mt-1" action="search_tourist_place.php" method="get">
                                        <label for="default-search" class="mb-1 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                        <div class="relative">
                                          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg>
                                          </div>
                                          <input type="search" name="search" id="default-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-teal-500 focus:border-teal-500 d" placeholder="Search Places You Like in Dharamshala" required>
                                          <button  class="text-white absolute right-1 top-1 bottom-1 bg-teal-950 hover:from-black hover:to-teal-900 focus:ring-4 focus:outline-none focus:ring-teal-900 font-medium rounded-lg text-sm px-4 py-1 ">Search</button>
                                        </div>
                                      </form>

                                </div>

                                    {{-- form ends --}}
                                </div>
            </div>
          {{-- container ends --}}
        </div>
        
        
        </div>
        
        
        
        
        </section>
        <section class="bg-white p-5">
            @foreach ($place_data as $place)
           <div class="flex flex-col lg:p-5 md:p-5 sm:p-2 p-1">
            <div class="flex items-center justify-center">
               
                    <h1 class="text-3xl font-bold text-yellow-400">{{ $place->location }}</h1>
                   
                
            </div>
            <div class="flex lg:flex-row md:flex-row sm:flex-row flex-col ">
                <div class="lg:w-1/2 md:w-1/2 w-full flex lg:flex-row md:flex-row flex-col gap-5  lg:p-5 md:p-5 sm:p-2 p-1">
                
<div class="lg:w-1/2 md:w-1/2 sm:w-full w-full  h-72 lg:p-2 md:p-2 sm:p-1 p-0">
    <img src="{{ asset('places_images/'.$place->file) }}" class="image_crousel hover:scale-105 duration-500 ease-in-out cursor-pointer " alt={{ $place->location }}>
</div>
{{-- crousel --}}
<div id="default-carousel" class="relative lg:w-1/2 md:w-1/2 sm:w-full w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative  overflow-hidden rounded-xl h-72 ">
         <!-- Item 1 -->
         @foreach ($cr as $data)
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('places_gallery/'.$data->image) }}" class="image_crousel  rounded-2xl hover:scale-105 duration-500 ease-in-out cursor-pointer absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt={{ $place->location }}>
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
                    <h1 class="text-justify text-gray-800 text-3xl font-semibold leading-tight ">{{ $place->heading }}</h1>
                    
                    <div class="lg:p-2 md:p-2 sm:p-1 p-0 text-lg">
                        <h1>Best time To Visit:<span class="text-sky-500 font-semibold">{{ $place->best_time }}</span></h1>
                        <h1>District:<span class="text-sky-500 font-semibold">{{ $place->district }}</span></h1>
                        
                    </div>
                    <div class="lg:p-2 md:p-2 sm:p-1 p-0">
                        <h1 class="text-lg leading-tight text-justify">{{ $place->description }}</h1>
                    </div>
                </div>
            </div>
           
            <div class="lg:p-2 md:p-2 sm:p-1 p-0">
                <h1 class="text-lg leading-tight text-justify">{{ $place->description2 }}</h1>
            </div>
           
           </div>
              
           {{-- gallery --}}
           <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:gap-6 md:gap-6 sm:gap-2 gap-2 lg:p-5 md:p-5 sm:p-2 p-1 mt-1 shadow-lg rounded-md shadow-sky-200">
            @foreach ($cr as $data)
                <img class="lg:h-60 md:h-60 sm:h-48 h-48 w-full rounded-lg object-cover transform transition hover:scale-105 duration-500 ease-in-out" src="{{ asset('places_gallery/'.$data->image) }}" alt={{ $place->location }}>
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
                        @foreach ($cd as  $c_d)
                        <div class=" mx-auto bg-white shadow-xl shadow-blue-200 rounded-xl overflow-hidden">
                            <img src="{{ asset('places_images/'.$c_d->file) }}" alt={{ $c_d->location }} class="w-full lg:h-60 md:h-60 sm:h-56  h-44 ">
                            <div class="p-2">
                              <h1 class="lg:text-xl md:text-xl sm:taxt-lg text-base font-thin mb-2 text-justify">{{ Str::limit($c_d->heading,65) }}</h1>
                             <div class="lg:visible md:visible sm:invisible invisible lg:h-auto md:h-auto h-0">
                                <p class="text-blue-800 font-bold text-sm">Location {{ $c_d->location }}</p>
                                <p class="text-gray-700 lg:mt-2 md:mt-2 mt-0 text-justify">{{ Str::limit($c_d->description,100) }}</p>
                             </div>
                              <a href={{ urlencode($c_d->heading) }} class="block lg:mt-4 md:mt-4 sm:mt-2 mt-1 text-blue-500 hover:text-blue-600 hover:scale-105">Read more</a>
                            </div>
                          </div>
                          @endforeach
                        <!-- Card ends -->
                        
                          
                         
                        
                         
                      
                  
                      </div>
                          
               








    </div>
</section>
{{-- category data ends --}}
    @include('components/footer')
</body>
<script>
    var paragraph = document.getElementsByClassName('text-h')[0];

function textEffect(animationName) {
  var text = paragraph.innerHTML,
		chars = text.length,
		newText = '',
		animation = animationName,
		char,
		i;

	for (i = 0; i < chars; i += 1) {
		newText += '<i>' + text.charAt(i) + '</i>';
	}

	paragraph.innerHTML = newText;

	var wrappedChars = document.getElementsByTagName('i'),
		wrappedCharsLen = wrappedChars.length,
		j = 0;

	function addEffect () {
		setTimeout(function () {
			wrappedChars[j].className = animation;
			j += 1;
			if (j < wrappedCharsLen) {
				addEffect();
			}
		}, 200)
	}

	addEffect();
};

textEffect('fly-in-out');
</script>
</html>