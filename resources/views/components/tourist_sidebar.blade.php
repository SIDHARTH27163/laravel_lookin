<div style="min-height: 716px" class="w-64 absolute sm:relative  shadow-lg md:h-full flex-col justify-between hidden sm:flex">
    <div class="px-8">
        
        <ul class="mt-5">
           
            <li>
                
<div id="accordion-collapse" data-accordion="collapse">
    <h2 id="accordion-collapse-heading-1">
      <button type="button" class="flex items-center justify-between w-full p-2 font-medium text-left text-slate-950 text-xl  " data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
        <span>Filter By Category</span>
        <svg data-accordion-icon class="w-5 h-5 animate-bounce rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
          
      </button>
    </h2>
    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
        <div class="p-2  ">
            <p class="mb-2 font-semibold text-blue-600 text-xs">Filter Destinations By Category.</p>
            
<div class="w-48 text-sm font-medium text-gray-900  rounded-lg ">

@foreach ($cats as $i=> $cat)
<a href="/filter_places/{{ $cat->category }}" class="block w-full px-1 text-lg font-normal py-1  cursor-pointer hover:bg-gray-100 text-blue-700 hover:rounded-lg hover:shadow-lg ">
   {{ $cat->category }}
    </a>
@endforeach
{{-- <a href="#" class="block w-full px-1 text-lg py-2  cursor-pointer hover:bg-gray-200 text-blue-700 ">
Settings
</a>
<a href="#" class="block w-full px-1 text-lg py-2  cursor-pointer hover:bg-gray-200 text-blue-700 ">
Messages
</a>
<a href="#" class="block w-full px-1 text-lg py-2 rounded-b-lg cursor-pointer hover:bg-gray-200 text-blue-700 ">
Download
</a> --}}
</div>

          </div>
    </div>
    
  
   
  </div>
  
            </li>
          
           
         {{-- second toggle --}}
         <li>
                
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                  <button type="button" class="flex  items-center justify-between w-full p-2 font-medium text-xl text-left text-slate-950   " data-accordion-target="#accordion-collapse-body-2" aria-expanded="true" aria-controls="accordion-collapse-body-2">
                    <span>Filter By Location</span>
                    <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0 animate-bounce " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                      </svg>
                      
                  </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                  <div class="p-2  ">
                    <p class="mb-2 font-semibold text-blue-600 text-xs">Filter Destinations By Location.</p>
                    
<div class="w-48 text-sm font-medium text-gray-900  rounded-lg ">
   
    @foreach ($locations as  $location)
    <a href="/filter_places/{{ $location->location }}" class="block w-full px-1 text-lg font-normal py-1 cursor-pointer hover:bg-gray-100 text-blue-700 hover:rounded-lg hover:shadow-lg ">
        {{ $location->location }}
        </a>
    @endforeach
</div>

                  </div>
                </div>
                
              
               
              </div>
              
                        </li>
          {{-- secont toggle closes --}}
        </ul>
       
    </div>
   
</div>

{{-- mobile design --}}

<div class="w-64 z-40 absolute bg-white  shadow-lg md:h-full flex-col justify-between sm:hidden transition duration-150 ease-in-out" id="mobile-nav">
    <button aria-label="toggle sidebar" id="openSideBar" class="h-10 w-10 bg-gray-900 text-white absolute right-0 mt-2 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 rounded focus:ring-gray-800" onclick="sidebarHandler(true)">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
          </svg>
          
    </button>
    <button aria-label="Close sidebar" id="closeSideBar" class="hidden h-10 w-10  ml-2 bg-gray-800 text-white absolute right-0 mt-2 -mr-10  items-center shadow rounded-tr rounded-br justify-center cursor-pointer " onclick="sidebarHandler(false)">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          
    </button>
    <div class="px-8 py-2">
        <ul class="mt-2">
           
            <li>
                
<div id="accordion-collapse" data-accordion="collapse">
    <h2 id="accordion-collapse-heading-4">
      <button type="button" class="flex items-center justify-between w-full p-2 font-medium text-left text-slate-950 text-xl  " data-accordion-target="#accordion-collapse-body-3" aria-expanded="true" aria-controls="accordion-collapse-body-3">
        <span>Filter By Category</span>
        <svg data-accordion-icon class="w-5 h-5 animate-bounce rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
          
      </button>
    </h2>
    <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
        <div class="p-2  ">
            <p class="mb-2 font-semibold text-blue-600 text-xs">Filter Destinations By Category.</p>
            
<div class="w-48 text-sm font-medium text-gray-900  rounded-lg ">

@foreach ($cats as $i=> $cat)
<a href="/filter_places/{{ $cat->category }}" class="block w-full px-1 text-lg font-normal py-1  cursor-pointer hover:bg-gray-100 text-blue-700 hover:rounded-lg hover:shadow-lg ">
   {{ $cat->category }}
    </a>
@endforeach
{{-- <a href="#" class="block w-full px-1 text-lg py-2  cursor-pointer hover:bg-gray-200 text-blue-700 ">
Settings
</a>
<a href="#" class="block w-full px-1 text-lg py-2  cursor-pointer hover:bg-gray-200 text-blue-700 ">
Messages
</a>
<a href="#" class="block w-full px-1 text-lg py-2 rounded-b-lg cursor-pointer hover:bg-gray-200 text-blue-700 ">
Download
</a> --}}
</div>

          </div>
    </div>
    
  
   
  </div>
  
            </li>
          
           
         {{-- second toggle --}}
         <li>
                
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-4">
                  <button type="button" class="flex  items-center justify-between w-full p-2 font-medium text-xl text-left text-slate-950   " data-accordion-target="#accordion-collapse-body-4" aria-expanded="true" aria-controls="accordion-collapse-body-4">
                    <span>Filter By Location</span>
                    <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0 animate-bounce " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                      </svg>
                      
                  </button>
                </h2>
                <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                  <div class="p-2  ">
                    <p class="mb-2 font-semibold text-blue-600 text-xs">Filter Destinations By Location.</p>
                    
<div class="w-48 text-sm font-medium text-gray-900  rounded-lg ">
   
    @foreach ($locations as  $location)
    <a href="/filter_places/{{ $location->location }}" class="block w-full px-1 text-lg font-normal py-1  cursor-pointer hover:bg-gray-100 text-blue-700 hover:rounded-lg hover:shadow-lg ">
        {{ $location->location }}
        </a>
    @endforeach
</div>

                  </div>
                </div>
                
              
               
              </div>
              
                        </li>
          {{-- secont toggle closes --}}
        </ul>
       
    </div>
   
</div>

{{-- mobile design --}}


<script>
    var sideBar = document.getElementById("mobile-nav");
var openSidebar = document.getElementById("openSideBar");
var closeSidebar = document.getElementById("closeSideBar");
sideBar.style.transform = "translateX(-260px)";

function sidebarHandler(flag) {
    if (flag) {
        sideBar.style.transform = "translateX(0px)";
        openSidebar.classList.add("hidden");
        closeSidebar.classList.remove("hidden");
    } else {
        sideBar.style.transform = "translateX(-260px)";
        closeSidebar.classList.add("hidden");
        openSidebar.classList.remove("hidden");
    }
}
</script>