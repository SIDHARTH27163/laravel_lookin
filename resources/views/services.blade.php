<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lookin Dharamshala</title>

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




<div class=" w-full  bg-cover bg-center bg-no-repeat bg-fixed " style="background-image:url('./images/bg.jpg')">
    <div class="bubbles">
        <div class="bubble bg-rose-600"></div>
      
      <div class="bubble bg-rose-600"></div>
      <div class="bubble bg-sky-600"></div>
      <div class="bubble bg-indigo-600"></div>
      <div class="bubble bg-lime-600"></div>
      <div class="bubble bg-orange-600"></div>
      <div class="bubble bg-yellow-600"></div>
      <div class="bubble bg-emerald-600"></div>
      <div class="bubble bg-pink-600"></div>
    </div>

<div class=" py-24 w-full  backdrop-brightness-50  ">
    {{-- <h1  class="text-yellow-400 font-bold text-h">Lookin Dharamshala</h1> --}}
    <div class=" container mx-auto lg:px-10 mdLpx-6 sm:px-4 px-4">
        <h1 class="leading-tight  font-bold  cursor-pointer text-yellow-400 ">
                    <span class="text-sky-300  text-h ">Lookin Dharamshala</span></h1>
        
                    <p class="text-white text-base text-justify mb-1 lg:w-1/2 md:w-1/2 sm:w-3/4 w-full cursor-pointer transform transition hover:scale-105 duration-500 ease-in-out ">
                        Lookin Dharamshala is a cutting-edge multi-service platform that offers a diverse range of conveniences and solutions for travelers and residents alike. From hassle-free accommodation bookings in picturesque Dharamshala to personalized travel itineraries, local tour guidance, and curated experiences, Lookin Dharamshala serves as the ultimate one-stop destination for all your travel needs. With a seamless user interface and a plethora of services at your fingertips, Lookin Dharamshala promises to enhance your journey and make your stay in this beautiful destination truly unforgettable.
                        </p>
    </div>
</div>


</div>




</section>
{{-- banner ends --}}


{{-- list sercices starts --}}
<section class="p-2 w-full">
    <div class="  p-2 w-full overflow-hidden">
        <h1 class="text-xl leading-tight  font-bold transform transition hover:scale-105 duration-500 ease-in-out cursor-pointer text-center duration-400 text-orange-400 ">
           Services In Lookin Dharamshala</h1>
            <h1 class="text-3xl leading-tight text-gray-900  font-bold transform transition hover:scale-105 duration-500 ease-in-out cursor-pointer text-center duration-400 hover:text-yellow-400 ">
                Services We Provide In Lookin Dharamshala</h1>
            <div class="flex items-center justify-center">
                <p class="text-gray-700  text-base lg:w-3/4 md:w-3/4 sm:w-full w-full cursor-pointer lg:text-center md:text-center sm:text-justify text-justify">
                    Lookin Dharamshala is a cutting-edge multi-service platform that offers a diverse range of conveniences and solutions for travelers and residents alike. From hassle-free accommodation bookings in picturesque Dharamshala to personalized travel itineraries, local tour guidance, and curated experiences, Lookin Dharamshala serves as the ultimate one-stop destination for all your travel needs.
                        </p> 
        </div>
       </div>
    <div class="container m-1 mx-auto px-4 ">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            @foreach ($services as $i=> $service)
<!-- Column -->
<div class="my-2 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 ">
    
    <!-- Article -->
    <article class="overflow-hidden rounded-xl shadow-lg shadow-sky-200 ">

        <a  href={{ $service->page_link }}>
            <img alt= {{ $service->service_name."Lookin Dharamshala"}} class="block h-64 w-full transform transition hover:scale-105 duration-500 ease-in-out" src="{{ asset('service_images/'.$service->image) }}">
        </a>

        <header class="flex items-center justify-between leading-tight p-1">
            <h1 class="text-lg font-bold">
                <a class="no-underline hover:underline text-black"  href={{ $service->page_link }}>
                   {{ $service->service_name }}
                </a>
            </h1>
           
        </header>

        <footer class="flex items-center justify-between leading-none p-1">
            <a class="flex items-center no-underline hover:underline text-black"  href={{ $service->page_link }}>
                <img alt= {{ $service->service_name."Lookin Dharamshala"}} class="block rounded-full h-10 w-10" src="{{ asset('service_images/'.$service->image) }}">
                <p class="ml-2 text-sm">
                    {{ $service->service_name }}
                </p>
            </a>
      
        </footer>

    </article>
    <!-- END Article -->

</div>
<!-- END Column -->
            @endforeach
            
    
            <!-- Column -->
            
    
        </div>
        {!! $services->links() !!}
    </div>
</section>

{{-- list services ends --}}
{{-- section for crousel ends --}}
<!--  -->
{{-- what we provide or feature --}}
@include('components/features')
{{-- features ends --}}
{{-- section for blogs starts here --}}



{{-- section for blogs ends --}}
@include('components/footer')
</body>


<script>
    let defaultTransform = 0;
  function goNext() {
      defaultTransform = defaultTransform - 315;
      var slider = document.getElementById("slider");
      if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.9) defaultTransform = 0;
      slider.style.transform = "translateX(" + defaultTransform + "px)";
  }
  next.addEventListener("click", goNext);
  function goPrev() {
      var slider = document.getElementById("slider");
      if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
      else defaultTransform = defaultTransform + 315;
      slider.style.transform = "translateX(" + defaultTransform + "px)";
  }
  prev.addEventListener("click", goPrev);
  
  </script>

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