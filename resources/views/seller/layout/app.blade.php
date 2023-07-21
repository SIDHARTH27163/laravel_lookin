<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Seller Dashboard</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- <link href="{{ asset('public/build/css/app.css') }}" rel="stylesheet" type="text/css" >
    <script type="text/javascript" src="{{ asset('public/build/js/app.js') }}"></script> -->


    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/css/output.css')
    <!-- Scripts -->
    
    @vite('resources/js/app.js')
</head>

<body class="leading-normal tracking-normal " style="font-family: 'Roboto Flex', sans-serif;">




<button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm  rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-gray-200 text-gray-400 hover:bg-gray-700">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-slate-800 shadow-lg">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="index.php" class="flex items-center p-2  rounded-lg text-white  hover:bg-gray-700">
               <svg aria-hidden="true" class="w-6 h-6  transition duration-75 text-gray-400 group-hover: group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
         <li>
            <button type="button" class="flex items-center w-full p-2  transition duration-75 rounded-lg group  text-white hover:bg-gray-700" aria-controls="dropdown-example_state" data-collapse-toggle="dropdown-example_blogs">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
</svg>



                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Manage Blogs</span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-example_blogs" class="hidden py-2 space-y-2">
            <li>
                     <a href="add_blogs_location.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Add Blogs  Location</a>
                  </li>
                  <li>
                     <a href="manage_blogs_location.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Manage Locations</a>
                  </li>
                  <li>
                     <a href="add_blogs_cat.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Add Blog Category</a>
                  </li>
                  <li>
                     <a href="manage_blogs_cat.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Manage Blog Category</a>
                  </li>
                  <li>
                     <a href="add_blogs.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Add Blogs</a>
                  </li>
                
                  <li>
                     <a href="manage_blogs.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">View and Edit Blogs</a>
                  </li>
                  <li>
                     <a href="blogs_comments.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Manage  Comments</a>
                  </li>
                 
            </ul>
         </li>
         <li>
            <button type="button" class="flex items-center w-full p-2  transition duration-75 rounded-lg group  text-white hover:bg-gray-700" aria-controls="dropdown-example_tp" data-collapse-toggle="dropdown-example_tp">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
</svg>


                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Manage Tourist P</span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-example_tp" class="hidden py-2 space-y-2">
          
                  <li>
                     <a href="manage_t_place_loc.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Manage Locations</a>
                  </li>
                 
                  <li>
                     <a href="manage_t_cat.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Manage Category </a>
                  </li>
                  <li>
                     <a href="add_tourist_place.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Add T Place</a>
                  </li>
                
                  <li>
                     <a href="manage_tplaces.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">View and Edit T Place</a>
                  </li>
                 
            </ul>
         </li>
         <li>
            <button type="button" class="flex items-center w-full p-2  transition duration-75 rounded-lg group  text-white hover:bg-gray-700" aria-controls="dropdown-example_state" data-collapse-toggle="dropdown-example_state">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
</svg>

                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Manage States</span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-example_state" class="hidden py-2 space-y-2">
                  <li>
                     <a href="add_state.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Add State</a>
                  </li>
                  <li>
                     <a href="manage_state.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">View State</a>
                  </li>
                 
            </ul>
         </li>
         <li>
            <button type="button" class="flex items-center w-full p-2  transition duration-75 rounded-lg group  text-white hover:bg-gray-700" aria-controls="dropdown-example-city" data-collapse-toggle="dropdown-example-city">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
</svg>


                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Manage Cities</span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-example-city" class="hidden py-2 space-y-2">
                  <li>
                     <a href="add_city.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Add City</a>
                  </li>
                  <li>
                     <a href="manage_city.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">View City</a>
                  </li>
                 
            </ul>
         </li>
         <li>
            <button type="button" class="flex items-center w-full p-2  transition duration-75 rounded-lg group  text-white hover:bg-gray-700" aria-controls="dropdown-example_c" data-collapse-toggle="dropdown-example_c">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
</svg>

                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Manage Countries</span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-example_c" class="hidden py-2 space-y-2">
                  <li>
                     <a href="add_country.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Add Country</a>
                  </li>
                  <li>
                     <a href="manage_country.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">View Country</a>
                  </li>
                 
            </ul>
         </li>
         <li>
            <button type="button" class="flex items-center w-full p-2  transition duration-75 rounded-lg group  text-white hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
</svg>

                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Manage Services</span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-example" class="hidden py-2 space-y-2">
                  <li>
                     <a href="add_services.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Add Services</a>
                  </li>
                  <li>
                     <a href="manage_services.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">View Services</a>
                  </li>
                 
            </ul>
         </li>

         <li>
            <button type="button" class="flex items-center w-full p-2  transition duration-75 rounded-lg group  text-white hover:bg-gray-700" aria-controls="dropdown-service-category" data-collapse-toggle="dropdown-service-category">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
</svg>

                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Manage Categories</span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-service-category" class="hidden py-2 space-y-2">
                  <li>
                     <a href="add_service_category.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Add Category</a>
                  </li>
                  <li>
                     <a href="manage_service_category.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">View Category</a>
                  </li>
                 
            </ul>
         </li>
        
         <li>
            <button type="button" class="flex items-center w-full p-2  transition duration-75 rounded-lg group  text-white hover:bg-gray-700" aria-controls="dropdown-example2" data-collapse-toggle="dropdown-example2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M16.712 4.33a9.027 9.027 0 011.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 00-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 010 9.424m-4.138-5.976a3.736 3.736 0 00-.88-1.388 3.737 3.737 0 00-1.388-.88m2.268 2.268a3.765 3.765 0 010 2.528m-2.268-4.796a3.765 3.765 0 00-2.528 0m4.796 4.796c-.181.506-.475.982-.88 1.388a3.736 3.736 0 01-1.388.88m2.268-2.268l4.138 3.448m0 0a9.027 9.027 0 01-1.306 1.652c-.51.51-1.064.944-1.652 1.306m0 0l-3.448-4.138m3.448 4.138a9.014 9.014 0 01-9.424 0m5.976-4.138a3.765 3.765 0 01-2.528 0m0 0a3.736 3.736 0 01-1.388-.88 3.737 3.737 0 01-.88-1.388m2.268 2.268L7.288 19.67m0 0a9.024 9.024 0 01-1.652-1.306 9.027 9.027 0 01-1.306-1.652m0 0l4.138-3.448M4.33 16.712a9.014 9.014 0 010-9.424m4.138 5.976a3.765 3.765 0 010-2.528m0 0c.181-.506.475-.982.88-1.388a3.736 3.736 0 011.388-.88m-2.268 2.268L4.33 7.288m6.406 1.18L7.288 4.33m0 0a9.024 9.024 0 00-1.652 1.306A9.025 9.025 0 004.33 7.288" />
</svg>

                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Manage Furnishing </span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-example2" class="hidden py-2 space-y-2">
                  <li>
                     <a href="add_furnishing.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Add Furnishing </a>
                  </li>
                  <li>
                     <a href="manage_furnish.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">View Profiles</a>
                  </li>
                 
            </ul>
         </li>
         <li>
            <button type="button" class="flex items-center w-full p-2  transition duration-75 rounded-lg group  text-white hover:bg-gray-700" aria-controls="dropdown-example3" data-collapse-toggle="dropdown-example3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
</svg>

                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Manage Facilities</span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-example3" class="hidden py-2 space-y-2">
                  <li>
                     <a href="add_facility.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Add Facilities </a>
                  </li>
                  <li>
                     <a href="manage_facility.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">View Facilities</a>
                  </li>
                 
            </ul>
         </li>
         <li>
            <button type="button" class="flex items-center w-full p-2  transition duration-75 rounded-lg group  text-white hover:bg-gray-700" aria-controls="dropdown-p" data-collapse-toggle="dropdown-p">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
</svg>

                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Manage Profiles</span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-p" class="hidden py-2 space-y-2">
                  <li>
                     <a href="add_profiles.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Manage Professions</a>
                  </li>
                  <!-- <li>
                     <a href="manage_profiles.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Manage Profiles</a>
                  </li> -->
                  <!-- <li>
                     <a href="add_profile_cat.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Add Profile Category</a>
                  </li> -->
                  
                  <li>
                     <a href="add_profile_cat.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Manage Profiles</a>
                  </li>
                 
            </ul>
         </li>
         <li>
            <button type="button" class="flex items-center w-full p-2  transition duration-75 rounded-lg group  text-white hover:bg-gray-700" aria-controls="dropdown-acc" data-collapse-toggle="dropdown-acc">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
</svg>

                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Manage Pg/Rooms</span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-acc" class="hidden py-2 space-y-2">
                  <li>
                     <a href="manage_approved_acc.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Manage Approved Accomodations </a>
                  </li>
                  <li>
                     <a href="manage_unapproved_acc.php" class="flex items-center w-full p-2  transition duration-75 rounded-lg pl-11 group  text-white hover:bg-gray-700 font-roboto">Manage Un-Approved Accomodations </a>
                  </li>
                 
            </ul>
         </li>
         <li>
            <a href="manage_users.php" class="flex items-center p-2  rounded-lg text-white  hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6  transition duration-75 text-gray-400 group-hover: group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
            </a>
         </li>
         
         <li>
            <a href="feedbacks.php" class="flex items-center p-2  rounded-lg text-white  hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
</svg>

               <span class="flex-1 ml-3 whitespace-nowrap">Feedbacks</span>
            </a>
         </li>
       
         <li>
            <a href="../auth/logout.php" class="flex items-center p-2  rounded-lg text-white  hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
</svg>

               <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
            </a>
         </li>
       
      </ul>
   </div>
</aside>

<div class="p-4 sm:ml-64 bg-gray-900">
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
      <div class="grid grid-cols-3 gap-4 mb-4">
         <div class="flex items-center justify-center h-24 rounded bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
         <div class="flex items-center justify-center h-24 rounded bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
      </div>
      <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-800">
         <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
         </p>
      </div>
     
     <section>
     @yield('content')
     </section>
     
   </div>
</div>

<!--  -->

</body>

</html>