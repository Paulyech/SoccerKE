<header class="bg-gray-600 lg:px-16 lg:py-0 py-2 flex flex-wrap items-center">
    <div class="flex flex-1 justify-start items-center ">
        <a href="">
            <img src="../images/cover1.jpg" alt="logo" class="w-12 h-10 object-cover rounded-full items-center">
        </a>
        <a href="" class="text-white font-bold items-center capitalize text-3xl"> soccer <span class="text-red-400">world</span> </a>
    </div>

        <label for="menu-toggle" class="lg:hidden cursor-pointer block bg-gray-700 mr-4 rounded-lg border-white border-2 ">
            <svg class="w-12 h-10 fill-current  " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
        </label>
        <input type="checkbox" id="menu-toggle" class="hidden">
        <div id="menu" class="hidden lg:flex lg:items-center lg:w-auto w-full">
            <nav>
                <ul class="lg:flex justify-between items-center pt-4 lg:pt-0 text-base text-gray-200 list-none " >
                    <li >
                        @if (session()->has('userDetails'))
                        <a href="/home" class="nav-link">home</a>

                        @else
                                <a href="/" class="nav-link">home</a>
                        @endif
                   </li>
                    <li>
                        <a href="/tactics" class="nav-link">tactics</a>
                    </li>
                    <li>
                        <a href="/training" class="nav-link">training drills</a>
                    </li>
                    <li>
                        <a href="/skills" class="nav-link">skill drills</a>
                    </li>
                    <li>
                        <a href="/showboat" class="nav-link">showboating videos</a>
                    </li>
                    <li>
                        <a href="/gallery" class="nav-link">gallery</a>
                    </li>
                    <li>
                        <a href="/docs" class="nav-link">documentaries</a>
                    </li>
                     <!-- dropdown -->
                <li class="relative" x-data="{dropdownOpen:false}">
                <button
                  href="#"
                  class="flex w-full px-4 py-2 font-medium text-white rounded-md outline-none  focus:outline-none hover:bg-blue-800"
                  @click="dropdownOpen = !dropdownOpen"
                >
                  Gambling
                  <svg class="fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                    <path d="M7 10l5 5 5-5z" />
                    <path d="M0 0h24v24H0z" fill="none" />
                  </svg> 
                </button>
                <!-- dropdown menu -->
                <div
                  class="right-0 p-2 mt-1 bg-white rounded-md shadow lg:absolute"
                  :class="{'hidden':!dropdownOpen,'flex flex-col':dropdownOpen}"
                  @click.away="dropdownOpen = false"
                >
                  <ul class="space-y-2 lg:w-48 capitalize">
                    <li>
                      <a
                        href="/prediction"
                        class="flex p-2 font-medium text-gray-600 rounded-md  hover:bg-gray-100 hover:text-black"
                        >prediction sites</a
                      >
                    </li>
                    <li>
                      <a
                        href="/bet"
                        class="flex p-2 font-medium text-gray-600 rounded-md  hover:bg-gray-100 hover:text-black"
                        >betting sites</a
                      >
                    </li>
                    <li>
                      <a
                        href="/stream"
                        class="flex p-2 font-medium text-gray-600 rounded-md  hover:bg-gray-100 hover:text-black"
                        >streaming sites</a
                      >
                    </li>
                    <li>
                      <a
                        href="/odd"
                        class="flex p-2 font-medium text-gray-600 rounded-md  hover:bg-gray-100 hover:text-black"
                        >odds</a
                      >
                    </li>
                  </ul>
                </div>
                <!-- dropdown menu -->
              </li>
              <!-- dropdown -->
            
                    <li>
                        <a href="/contact" class="nav-link">contact us</a>
                    </li>  
                </ul>
                
            </nav>
            
            <div class="space-x-4 text-gray-300 text-sm sm:text-base">
            @if (Request::path() == 'login')
                <a class="no-underline hover:bg-blue-800 font-bold bg-red-800 rounded-md px-6 py-2"  href="/register">{{ __('Register') }}</a>
            @elseif (Request::path() == 'register')
                <a class="no-underline hover:bg-blue-800 font-bold bg-red-800 rounded-md px-6 py-2" href="/login">{{ __('Login') }}</a>
            @elseif( session()->has('userDetails'))

                <a href="/logout" class="no-underline hover:bg-blue-800 font-bold bg-red-800 rounded-md px-6 py-2">{{ __('Logout') }}</a>
                
            @endif
            </div>
        </div>
        
    
</header>

