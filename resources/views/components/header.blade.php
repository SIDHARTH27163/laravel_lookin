 <!--Nav-->
 <nav id="header" class="fixed w-full z-30 top-0 transparent shadow-sm">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between  mt-0 py-1 lg:px-5 md:px-5 sm:px-2 px-1">
        
      <a href="/" class="flex flex-row hover:shadow-lg hover:rounded-full hover:scale-125 duration-300 ease-in-out">
      <img src="{{ asset('images/lookin_web.png') }}" class="lg:w-14 md:w-14 sm:w-12 w-12 lg:h-14 md:h-14 sm:h-12 h-12 " alt="lookindharamshala web logo"/>
       
     <div class="flex flex-col px-1">
     <p class="toggleColour text-yellow-400 lg:text-2xl md:text-xl sm:text-ms text-base font-bold">Lookin Dharamshala</p> 
     <p class="toggleColour1 text-gray-200 lg:text-base md:text-base sm:text-xs text-xs font-fold">What You Think , We Have It </p> 
     </div> 
    
    </a>
      <!-- <img
  src="../images/lookin_logo.png"
  class="w-12 h-12"
  /> -->
          
       
        <div class="block lg:hidden pr-2">
        <button id="nav-toggle" class="flex items-center p-1 text-gray-900 hover:text-slate-950  transform transition hover:scale-110 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-1 lg:mt-0  lg:bg-transparent  p-2 lg:p-0 z-20 " id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center py-1">
          <li class="mr-0">
              <a id="navitem" class="toggleColour  text-white inline-block text-lg hover:shadow-lg hover:rounded-xl   no-underline  hover:scale-105 duration-300 ease-in-out py-2 px-4 font-bold" href="/">Home</a>
            </li>
            <li class="mr-0">
              <a id="navitem1" class="toggleColour2  text-white inline-block text-lg hover:shadow-lg hover:rounded-xl  no-underline  hover:scale-105 duration-300 ease-in-out py-2 px-4 font-bold" href="/blogs">Blogs</a>
            </li>
            <li class="mr-0">
              <a id="navitem2" class="toggleColour3  text-white inline-block text-lg hover:shadow-lg hover:rounded-xl  no-underline  hover:scale-105 duration-300 ease-in-out py-2 px-4 font-bold" href="/tourist_places">Tourist Places</a>
            </li>
            <li class="mr-0">
              <a id="navitem3" class="toggleColour4  text-white inline-block text-lg hover:shadow-lg hover:rounded-xl  no-underline  hover:scale-105 duration-300 ease-in-out py-2 px-4 font-bold" href="signin">Signin</a>
            </li>
          </ul>

          
          
        </div>
      </div>
     
    </nav>
   
    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      // var navaction = document.getElementById("navAction");
      // var navaction1 = document.getElementById("navAction1");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");
      var toToggle1 = document.querySelectorAll(".toggleColour1");
      var toToggle2 = document.querySelectorAll(".toggleColour2");
      var toToggle3 = document.querySelectorAll(".toggleColour3");
      var toToggle4 = document.querySelectorAll(".toggleColour4");
      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-gray-200");
          // navaction.classList.remove("bg-white");
          // navaction.classList.add("gradient");
          // navaction.classList.remove("text-gray-800");
          // navaction.classList.add("text-white");
          // navaction1.classList.remove("bg-white");
          // navaction1.classList.add("gradient");
          // navaction1.classList.remove("text-gray-800");
          // navaction1.classList.add("text-white");
         
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-slate-950");
            toToggle[i].classList.remove("text-white");
            toToggle1[i].classList.add("text-slate-900");
            toToggle1[i].classList.remove("text-white");
            toToggle2[i].classList.add("text-slate-950");
            toToggle2[i].classList.remove("text-white");
            toToggle3[i].classList.add("text-slate-950");
            toToggle3[i].classList.remove("text-white");
            toToggle4[i].classList.add("text-slate-950");
            toToggle4[i].classList.remove("text-white");
          }
          header.classList.add("shadow");header.classList.add("bg-gray-100");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-gray-200");
          header.classList.add("transparent");
          // navaction.classList.remove("gradient");
          // navaction.classList.add("bg-white");
          // navaction.classList.remove("text-white");
          // navaction.classList.add("text-gray-800");
          // navaction1.classList.remove("gradient");
          // navaction1.classList.add("bg-white");
          // navaction1.classList.remove("text-white");
          // navaction1.classList.add("text-gray-800");
       
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-slate-950");
            toToggle1[i].classList.add("text-white");
            toToggle1[i].classList.remove("text-slate-900");
            toToggle2[i].classList.add("text-white");
            toToggle2[i].classList.remove("text-slate-950");
            toToggle3[i].classList.add("text-white");
            toToggle3[i].classList.remove("text-slate-950");
            toToggle4[i].classList.add("text-white");
            toToggle4[i].classList.remove("text-slate-950");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-200");
        }
      });
    </script>
    <script>
     

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>