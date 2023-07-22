
<div class="flex flex-shrink-0 relative lg:w-80 lg:h-64 sm:w-full w-full sm:h-64 h-64 cursor-pointer">
    <a href={{ $url }}><img src="{{ asset( $image ) }}" alt={{ $text }}  class="image_crousel  rounded-2xl hover:scale-105 duration-500 ease-in-out cursor-pointer"/></a>
    {{-- <div class="absolute w-full bg-slate-950 p-2 backdrop-brightness-50  bg-opacity-30 bottom-0 rounded-b-2xl ">
        
        <div class="flex h-full  items-center justify-center p-1  ">
            <a href={{ $url}} class="text-xl  text-white "> {{ $text }} </a>
        </div>
    </div> --}}
    <div class="absolute bottom-0 left-0 right-0 px-4 py-2 backdrop-blur-sm bg-slate-950/30 rounded-b-xl">
        <a href={{ $url}} ><h1 class="text-2xl leading-tight text-white font-bold transform transition hover:scale-105 duration-500 ease-in-out cursor-pointer hover:text-center duration-400 hover:text-yellow-400 ">
            {{ $text }}</h1></a>
          
    </div>
</div>