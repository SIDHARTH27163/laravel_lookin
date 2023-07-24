<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>User Dashboard</title>

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

<body class="leading-normal tracking-normal bg-slate-950 " style="font-family: 'Roboto Flex', sans-serif;">



<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm  rounded-lg sm:hidden hover:bg-blue-500 focus:outline-none focus:ring-2  text-white  focus:ring-gray-50">
   <span class="sr-only">Open sidebar</span>
   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-16">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg>
    
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto  bg-gray-800">
      <ul class="space-y-2 font-medium">
       
         <li>
            <a href="_dashboard" class="flex items-center p-2  rounded-lg text-white bg-slate-900 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-sky-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                  </svg>
                  
               <span class="ml-3">Dashboard Home</span>
            </a>
         </li>
         <li>
            <a href="/user_profile" class="flex items-center p-2  rounded-lg text-white hover:bg-slate-900 ">
                
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                   
                  
               <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
            </a>
         </li>
         
         <li>
            <a href="/upload_blogs" class="flex items-center p-2  rounded-lg text-white hover:bg-slate-900 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-400 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h-.75A2.25 2.25 0 004.5 9.75v7.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25v-7.5a2.25 2.25 0 00-2.25-2.25h-.75m0-3l-3-3m0 0l-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 012.25 2.25v7.5a2.25 2.25 0 01-2.25 2.25h-7.5a2.25 2.25 0 01-2.25-2.25v-.75" />
                  </svg>
                  
               <span class="flex-1 ml-3 whitespace-nowrap">Upload Blogs</span>
            </a>
         </li>
         
         <li>
            <a href="/blogs_list" class="flex items-center p-2  rounded-lg text-white hover:bg-slate-900 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                  </svg>
                  
                  
                  
               <span class="flex-1 ml-3 whitespace-nowrap">Your Blogs</span>
            </a>
         </li>
         <li>
            <a href="/blog_comments" class="flex items-center p-2  rounded-lg text-white hover:bg-slate-900 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-sky-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                  </svg>
                  
                  
                  
                  
                  
               <span class="flex-1 ml-3 whitespace-nowrap">Blogs Comments</span>
            </a>
         </li>
         <li>
            <a href="/request_admin" class="flex items-center p-2  rounded-lg text-white hover:bg-slate-900 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-rose-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                  </svg>
                  
                  
               <span class="flex-1 ml-3 whitespace-nowrap">Request Admin</span>
            </a>
         </li>
         <li>
            <a href="user_notifications" class="flex items-center p-2  rounded-lg text-white hover:bg-slate-900 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-rose-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                  </svg>
                  
               <span class="flex-1 ml-3 whitespace-nowrap">Notification</span>
            </a>
         </li>
         <li>
            <a href="logout" class="flex items-center p-2  rounded-lg text-white hover:bg-slate-900 ">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                  <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                </svg>
                
               <span class="flex-1 ml-1 whitespace-nowrap">Sign Out</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

<div class="p-4 sm:ml-64   text-black h-full">
    {{-- top bar data --}}



 


     <div class="p-4 border-2 border-dashed rounded-lg border-gray-100 bg-gray-800 ">
        <div class=" p-2 mb-4 rounded bg-gray-50 ">
            <p class="text-2xl text-gray-900 ">Steps For Creating A Blog</p>
        <ol class="items-center w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0 p-4">
            <li class="flex items-center text-blue-600 dark:text-blue-500 space-x-2.5">
                <span class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    1
                </span>
                <span>
                    <h3 class="font-medium leading-tight">Click On Upload Blog</h3>
                    <p class="text-sm">You Will Redirected To New Page</p>
                </span>
            </li>
            <li class="flex items-center text-gray-900  space-x-2.5">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    2
                </span>
                <span>
                    <h3 class="font-medium leading-tight">Fill The Form</h3>
                    <p class="text-sm">Click Submit, You Will Be Redirected To New Page</p>
                </span>
            </li>
            <li class="flex items-center text-gray-900  space-x-2.5">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    3
                </span>
                <span>
                    <h3 class="font-medium leading-tight">In Third Step Upload Gallery Of Blog</h3>
                    <p class="text-sm">Click Submit, You Will Be Redirected To New Page</p>
                </span>
            </li>
            <li class="flex items-center text-gray-900  space-x-2.5">
                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    4
                </span>
                <span>
                    <h3 class="font-medium leading-tight">In Fourth Step Wait For Admin Approval.  </h3>
                    <p class="text-sm">Your Blog will be visible after Admin approval within 24 Hours</p>
                </span>
            </li>
        </ol>

        @yield('content')
    </div>
    
    {{-- top bar ends --}}

</div>

<!--  -->

</body>

</html>