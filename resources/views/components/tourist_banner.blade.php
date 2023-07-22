<div class="relative  w-full  bg-cover bg-center bg-no-repeat bg-fixed " style="background-image:url('../images/bg.jpg')">


    <div class=" py-20 w-full  backdrop-brightness-50  ">
    <div class=" container mx-auto px-10">
    <h1 class="text-3xl leading-tight text-white font-bold transform transition hover:scale-105 duration-500 ease-in-out cursor-pointer  hover:text-yellow-400 ">
                    Enjoy the holidays with <br/><span class="text-yellow-400 lg:text-5xl md:text-5xl sm:text-3xl text-3xl text-h">Lookin Dharamshala</span></h1>
    
                    <p class="text-white text-base text-justify mb-1 lg:w-1/2 md:w-1/2 sm:w-3/4 w-full cursor-pointer transform transition hover:scale-105 duration-500 ease-in-out ">
                    Welcome to our nature exploration website! We are passionate about showcasing the breathtaking beauty and wonders of the natural Dharamshala and Himachal Pardesh. Whether you're an avid adventurer, a nature enthusiast, or simply seeking solace in the great outdoors, our website is here to inspire and guide you on your journey.
                        </p>
    
      <div class="lg:w-1/2 md:w-1/2 sm:w-3/4 w-full">
      <div class="backdrop-blur-sm bg-white/30 lg:w-1/2 md:w-1/2 sm:w-3/4 w-full ">
        <div class="bg-teal-950  w-1/2 p-2 text-white text-center cursor-pointer transform transition hover:scale-105 duration-500 ease-in-out">Explore</div>
      </div>
      <div class="backdrop-blur-sm bg-white/30 lg:w-3/4 md:w-3/4 sm:w-full w-full pt-2 px-2 pb-2 flex flex-col">
        <!-- filter starts -->
       
        <!-- filter ends -->
        <form class="w-full lg:px-10 md:px-8 px-5  mt-1" action="/search_places" method="get">
             <label for="default-search" class="mb-1 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
             <div class="relative">
               <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                 <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                 </svg>
               </div>
               <input type="text" name="search" id="default-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-teal-500 focus:border-teal-500 d" placeholder="Search Places You Like in Dharamshala" required>
               <button  class="text-white absolute right-1 top-1 bottom-1 bg-teal-950 hover:from-black hover:to-teal-900 focus:ring-4 focus:outline-none focus:ring-teal-900 font-medium rounded-lg text-sm px-4 py-1 ">Search</button>
             </div>
           </form>
      </div>
     
    </div>
                  </div>
      
    </div>
    
    
        </div>
    
    
    
        </div>
    
        <!-- banner ends -->
    
        </div>
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
