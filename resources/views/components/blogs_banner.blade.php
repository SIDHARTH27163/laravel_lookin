<div class="relative  w-full  bg-cover bg-center bg-no-repeat bg-fixed " style="background-image:url('{{ asset('images/bg.jpg')}}')">
        
        
    <div class=" py-28 w-full  backdrop-brightness-50  ">
        {{-- container starts --}}
        {{-- <h1  class="text-yellow-400 font-bold text-h">Lookin Dharamshala</h1> --}}
        <div class=" container mx-auto lg:px-10 md:px-6 sm:px-4 px-4">
            <h1 class="leading-tight  font-bold  cursor-pointer text-yellow-400 ">
                        <span class="text-sky-300 text-h ">Lookin Dharamshala</span></h1>
            
                        <p class="text-white text-base text-justify mb-1 lg:w-1/2 md:w-1/2 sm:w-3/4 w-full cursor-pointer transform transition hover:scale-105 duration-500 ease-in-out ">
                            Welcome to our captivating blog series, exclusively brought to you by Lookin Dharamshala! Join us on an exhilarating journey as we uncover the hidden gems, cultural treasures, and breathtaking adventures waiting to be discovered in the picturesque town of Dharamshala.
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
                                <form class="w-full lg:px-10 md:px-8 px-5  mt-1" action="/search_blogs" method="get">
                                    {{ csrf_field() }}
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