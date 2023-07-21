<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lookin Dharamshala | Signup</title>

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

<!-- component -->
<body>
@include('../components/header')
    <section class="min-h-screen flex items-stretch text-white ">
        <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center" style="background-image: url(images/bg.jpg);">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl font-bold text-left tracking-wide">Keep it special</h1>
                <p class="text-3xl my-4">Capture your personal memory in unique way, anywhere.</p>
            </div>
            <div class="bottom-0 absolute p-4 text-center right-0 left-0 flex justify-center space-x-4">
                <span>
                    <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                </span>
                <span>
                    <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                </span>
                <span>
                    <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </span>
            </div>
        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center  px-7 z-0 bg-gradient-to-r from-slate-950 to-sky-400" >
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center" style="background-image: url(https://images.unsplash.com/photo-1577495508048-b635879837f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80);">
                <div class="absolute bg-gradient-to-r from-black to-blue-800 opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full  py-24 z-20">
             
               
                <p class="text-gray-100 text-xl">
                   Use your email account to signup
                </p>
				
                <form class="px-8 py-5 pb-8  my-4 bg-white rounded-xl shadow-xl" action="user_signup" method="post">
				@csrf  
                @method('post') 
								<div class="mb-1 md:flex md:justify-between">
									<div class="mb-1 md:mr-2 md:mb-0 w-full">
										<label class="block mb-1 text-sm font-bold text-slate-900 text-start" for="firstName">
											First Name
										</label>
										<input class="w-full px-3 py-2 text-sm leading-tight text-slate-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="text" name="fname" placeholder="First Name" />
										@if($errors->has('fname'))
				<p class="text-xs italic text-red-500 text-start"> First Name feild is required </p>
@endif
									</div>
									<div class="md:ml-2 w-full">
										<label class="block mb-1 text-sm font-bold text-slate-900 text-start" for="lastName">
											Last Name
										</label>
										<input class="w-full px-3 py-2 text-sm leading-tight text-slate-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="lastName" type="text" name="lname" placeholder="Last Name" />
										@if($errors->has('lname'))
				<p class="text-xs italic text-red-500 text-start">last Name feild is required </p>
@endif
									</div>
								</div>
								<div class="mb-1 md:flex md:justify-between">
									<div class="mb-1 md:mr-2 md:mb-0 w-full">
										<label class="block mb-1 text-sm font-bold text-slate-900 text-start" for="password">
											Email
										</label>
										<input class="w-full px-3 py-2  text-sm leading-tight text-slate-900 border border-gray-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="text" name="email" placeholder="johndoe@gmail.com" />
										@if($errors->has('email'))
				<p class="text-xs italic text-red-500 text-start">{{ $errors->first('email') }}</p>
@endif
									</div>
									<div class="md:ml-2 w-full">
										<label class="block mb-1 text-sm font-bold text-slate-900 text-start" for="c_password">
											Phone Number
										</label>
										<input class="w-full px-3 py-2  text-sm leading-tight text-slate-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="tel" type="text" name="phone" placeholder="0000000000" />
										@if($errors->has('phone'))
				<p class="text-xs italic text-red-500 text-start">{{ $errors->first('phone') }}</p>
@endif
									</div>
								</div>
								
								<div class="mb-1 ">
									
								<label class="block mb-1 text-sm font-bold text-slate-900 text-start" for="password">
											 Address
										</label>
										<textarea id="message" rows="2" name="address" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Enter You Address here..."></textarea>
										@if($errors->has('address'))
				<p class="text-xs italic text-red-500 text-start">{{ $errors->first('address') }}</p>
@endif
								</div>


								<div class="mb-1 md:flex md:justify-between">
									<div class="mb-1 md:mr-2 md:mb-0 w-full">
										<label class="block mb-1 text-sm font-bold text-slate-900 text-start" for="password">
											 City
										</label>
										<input class="w-full px-3 py-2 text-sm leading-tight text-slate-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="lastName" type="text" name="city" placeholder="Enter City" />
										@if($errors->has('city'))
				<p class="text-xs italic text-red-500 text-start">{{ $errors->first('city') }}</p>
@endif
									</div>
									<div class="mb-1 md:mr-2 md:mb-0 w-full">
										<label class="block mb-1 text-sm font-bold text-slate-900 text-start" for="password">
											 State
										</label>
										<input class="w-full px-3 py-2 text-sm leading-tight text-slate-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="lastName" type="text" name="state" placeholder="Enter State" />
										@if($errors->has('state'))
				<p class="text-xs italic text-red-500 text-start">{{ $errors->first('state') }}</p>
@endif
									</div>
									<div class="md:ml-2 w-full">
										<label class="block mb-1 text-sm font-bold text-slate-900 text-start" for="c_password">
											Country
										</label>
										<select name="country" id="countries" class=" border  leading-tight border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 ">
										<option value="">Select Option</option>
										<option value="india">India</option>
                 
											
										</select>
										@if($errors->has('country'))
				<p class="text-xs italic text-red-500 text-start">{{ $errors->first('country') }}</p>
@endif
									</div>
								</div>
								<div class="mb-1 md:flex md:justify-between">
									<div class="mb-1 md:mr-2 md:mb-0 w-full">
										<label class="block mb-1 text-sm font-bold text-slate-900 text-start" for="password">
											Password <span class="text-xs">(8 characters minimum)</span>
										</label>
										<input
										 class="w-full px-3 py-2  text-sm leading-tight text-slate-900 border border-gray-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline" 
										 id="password" type="password"
										 name="password"
										 placeholder="******************" 
										   
										 />
										 @if($errors->has('password'))
				<p class="text-xs italic text-red-500 text-start">{{ $errors->first('password') }}</p>
@endif
									</div>
									<div class="md:ml-2 w-full">
										<label class="block mb-1 text-sm font-bold text-slate-900 text-start" for="c_password">
											Confirm Password
										</label>
										<input class="w-full px-3 py-2  text-sm leading-tight text-slate-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										 id="c_password"
										  type="password"
										  name="confirm_password"
										   placeholder="******************" 
										      
										   />
										   @if($errors->has('confirm_password'))
				<p class="text-xs italic text-red-500 text-start">{{ $errors->first('confirm_password') }}</p>
@endif
									</div>
								</div>
								<div class="flex items-center mb-1 mt-1">
    <input id="default-checkbox" type="checkbox" value="1" name="tc" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 ">I accept <span class="text-blue-600 cursor-pointer" data-modal-target="defaultModal" data-modal-toggle="defaultModal">T & C </span> And <span class="text-blue-600 cursor-pointer" data-modal-target="defaultModal" data-modal-toggle="defaultModal">Privay Policy</span> </label>
</div>
@if($errors->has('tc'))
				<p class="text-xs italic text-red-500 text-start">{{ $errors->first('tc') }}</p>
@endif
								<div class="mt-2 text-center">
									<button class="w-full px-4 py-3 mt-4 font-bold text-white bg-gradient-to-r from-black to-blue-800 hover:from-black hover:to-blue-400 
                                    hover:rounded-full rounded-xl focus:outline-none focus:shadow-outline
                                    hover:scale-105 duration-500 ease-in-out 
                                    " >
										Sign Up
									</button>
								</div>
								<hr class="mb-2 border-t" />
								<div class="text-center">
									<a href="forgotpassword.php" class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="#">
										Forgot Password?
									</a>
								</div>
								<div class="text-center">
								<a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="./seller_signup.php">
										 Create Account As Seller / Register As seller
									</a>
								</div>
								<div class="text-center">
									<a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="./signin.php">
										Already have an account? Login!
									</a>
								</div>
							</form>
            </div>
        </div>
    </section>
</body>
@include('../components/footer')

   
   

</html>