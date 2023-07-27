@extends('admin.layouts.master')
@section('content')
    <div class="p-4 border-2 border-dashed rounded-lg border-gray-700 ">

        <div class="flex items-start  w-full justify-start">

            @if (session()->has('success'))
                <div id="toast-top-right"
                    class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-100 bg-rose-600 divide-x  rounded-lg shadow top-5 right-5 dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800"
                    role="alert">
                    <div class="text-sm font-normal">{{ session()->get('success') }}</div>

                </div>
            @endif
            {{-- add message --}}
            @if (session()->has('message'))
                <div id="toast-top-right"
                    class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-100 bg-green-600 divide-x  rounded-lg shadow top-5 right-5 dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800"
                    role="alert">
                    <div class="text-sm font-normal">{{ session()->get('message') }}</div>
                </div>
            @endif
            {{-- add message ends --}}
        </div>
        <p class="text-2xl italic underline font-bold">Add Service Category Here</p>
        <div class="flex items-center justify-center h-auto p-2 mb-4 rounded  bg-sky-600">
            {{-- forn starts --}}

            <form action="add_service_category" method="post" class="bg-white p-5 w-3/4 rounded-lg">
                @csrf
                @method('post')



                <div class="p-2">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a
                        Service</label>
                    <select id="countries" name="service"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option ></option>
                        @foreach ($services as $i => $service)
                            <option value={{ $service->id }}>{{ $service->service_name }}</option>
                        @endforeach

                    </select>



                    @if ($errors->has('service'))
                        <p class="text-sm italic text-red-500 text-start font-semibold my-2">{{ $errors->first('service') }}
                        </p>
                    @endif
                </div>


                <div class="p-2">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Service
                        Category</label>
                    <input name="service_category" type="text" id="first_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Hotels , Motels, Resorts Etc ">
                    @if ($errors->has('service_category'))
                        <p class="text-sm italic text-red-500 text-start font-semibold my-2">
                            {{ $errors->first('service_category') }}</p>
                    @endif
                </div>
                <button
                    class="text-white mt-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>

        <div class="w-full p-4 ">

            <p class="toggleColour text-gray-900 text-2xl  font-bold underline py-2">List For Services Categories</p>
            <div class="relative overflow-auto shadow-md sm:rounded-lg" id="unapproved">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-100 uppercase bg-rose-600 ">
                        <tr>
                            <th scope="col" class="px-3 py-3">
                                Index
                            </th>
                            <th scope="col" class="px-3 py-3">
                                Id
                            </th>
                            <th scope="col" class="px-3 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-3 py-3">
                                Service Name
                            </th>

                            </th>

                            <th scope="col" class="px-3 py-3">
                                Service Category
                            </th>
                            <th scope="col" class="px-3 py-3">
                              Action
                          </th>








                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($servicescats as $i => $service)
                            <tr class=" border-b bg-gray-900 border-gray-700 text-white font-semibold">
                                <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                                    {{ $i }}
                                </th>
                                <th scope="row" class="px-3 py-4 font-medium  whitespace-nowrap text-white">
                                    {{ $service->id }}
                                </th>
                                <td class="px-3 py-4">
                                    @if ($service->status == 1)
                                        <p class="text-green-500">Activated</p>
                                    @else
                                        <p class="text-red-500">Not Activated</p>
                                    @endif
                                </td>
                                <td class="px-3 py-4">
                                    {{ $service->service_name }}
                                </td>

                                <td class="px-3 py-4">
                                    {{ $service->service_category }}
                                </td>

                                <td class="px-3 py-4">
                                 <a href="{{url('delete_service_cat/'.$service->id)}}" class="font-medium text-rose-600 dark:text-rose-500 hover:underline">Delete</a><br>
                             </td>


                            </tr>
                        @endforeach


                    </tbody>
                </table>
                <div class="p-2 ">
            
                  {!! $servicescats->links() !!}
               </div>
            </div>
        </div>


        {{-- form ends --}}
    </div>


    </div>
@stop
