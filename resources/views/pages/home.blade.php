@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6   justify-center flex">

        <section class="flex flex-col break-words bg-white w-2/4 sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="flex justify-center font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                <div>
                  @if ( session()->get('userDetails')['role']   == 'coach')
                    Coach Dashboard
                  @elseif ( session()->get('userDetails')['role'] == 'player' )
                    Player Dashboard
                  @else
                    Fan Dashboard
                  @endif
  
                  <p class="text-gray-800 font-thin">
                     You are logged in!
                  </p>
                </div>
                 
            </header>

            <div class="w-full h-64 p-2 flex justify-center ">
                
                <table class="h-36 table-auto border border-gray-900 w-3/4">
                    <thead class=" bg-teal-700 capitalize">
                        <tr>
                            <th class="border-gray-900 border">Name</th>
                            <th class="border-gray-900 border" >Email</th>
                            <th class="border-gray-900 border"> action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-gray-900 border capitalize">  {{ session()->get('userDetails')['name'] }} </td>
                            <td class="" > {{ session()->get('userDetails')['email'] }}</td>
                            <td class="border-gray-900 border "> 
                                <a href="{{ url('logout') }}" class=" flex justify-center no-underline hover:bg-blue-800 font-bold rounded  px-6 py-2">{{ __('Logout') }}</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</main>
@endsection
