@extends('layouts.app')

@section('content')
<div class="min-h-screen justify-center items-center flex w-full" >
  <div  class="flex md:flex-row md:space-x-6 md:space-y-0 flex-col space-y-6  bg-cyan-700 w-full max-w-4xl rounded-xl p-8 shadow-lg text-white">
    <div class="flex flex-col justify-between space-y-8">
        {{-- contact header --}}
        <div>
            <h1 class="text-4xl font-bold capitalize">contact us</h1>
            <p class="text-sm">Having any inquiry or suggestion? Kindly hit our email and we'll respond .</p>
        </div>
        {{-- contact details --}}
        <div class="flex flex-col space-y-2">
            <div class="space-x-2 items-center">
                <svg class="h-5 w-5 inline-block" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <span>+2549084735</span>
            </div>
            <div class="space-x-2 items-center">
                <svg class="h-5 w-5 inline-block" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                 </svg>
                <span>soccerworld@gmail.com</span>
            </div>
            <div class="space-x-2 items-center">
                <svg class="h-5 w-5 inline-block"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                  </svg>
                <span>Nairobi,Kenya</span>
            </div>
            
        </div>
        {{-- contact socials  --}}
        <div class="flex space-x-2  text-lg">
            
            
            <a href="https://twitter.com/soccerworld">
                <svg class="bg-white rounded-lg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0v24h24v-24h-24zm18.862 9.237c.208 4.617-3.235 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.079-4.03 3.198-4.03.944 0 1.797.398 2.396 1.037.748-.147 1.451-.42 2.085-.796-.245.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.44.656-.997 1.234-1.638 1.697z"/></svg>
            </a>

            

            <a href="https://www.linkedin.com/in/soccerworlld"> 
                <svg class="bg-white rounded-lg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0v24h24v-24h-24zm8 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.397-2.586 7-2.777 7 2.476v6.759z"/></svg>
            </a>

            <a href="https://www.instagram.com/soccerworld"> 
                <svg class="rounded-lg bg-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.233 5.488c-.843-.038-1.097-.046-3.233-.046s-2.389.008-3.232.046c-2.17.099-3.181 1.127-3.279 3.279-.039.844-.048 1.097-.048 3.233s.009 2.389.047 3.233c.099 2.148 1.106 3.18 3.279 3.279.843.038 1.097.047 3.233.047 2.137 0 2.39-.008 3.233-.046 2.17-.099 3.18-1.129 3.279-3.279.038-.844.046-1.097.046-3.233s-.008-2.389-.046-3.232c-.099-2.153-1.111-3.182-3.279-3.281zm-3.233 10.62c-2.269 0-4.108-1.839-4.108-4.108 0-2.269 1.84-4.108 4.108-4.108s4.108 1.839 4.108 4.108c0 2.269-1.839 4.108-4.108 4.108zm4.271-7.418c-.53 0-.96-.43-.96-.96s.43-.96.96-.96.96.43.96.96-.43.96-.96.96zm-1.604 3.31c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667zm4.333-12h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm.952 15.298c-.132 2.909-1.751 4.521-4.653 4.654-.854.039-1.126.048-3.299.048s-2.444-.009-3.298-.048c-2.908-.133-4.52-1.748-4.654-4.654-.039-.853-.048-1.125-.048-3.298 0-2.172.009-2.445.048-3.298.134-2.908 1.748-4.521 4.654-4.653.854-.04 1.125-.049 3.298-.049s2.445.009 3.299.048c2.908.133 4.523 1.751 4.653 4.653.039.854.048 1.127.048 3.299 0 2.173-.009 2.445-.048 3.298z"/></svg>
            </a>
        </div>
    </div>
    {{-- contact form --}}
    <div class="bg-white rounded-xl shadow-lg p-8  text-gray-800 ">
        <form action=" "  class="flex flex-col space-y-4">
            <div>
                <label for="" class="text-sm ">Your Name</label>
            
                <input type="text" placeholder="Your Name" class="ring-1  ring-gray-300 outline-none px-4 py-2 mt-2 w-full rounded-md focus:ring-2 focus:ring-teal-300">
            </div>
            <div>
                <label for="" class="text-sm ">Email</label>
            
                <input type="email" placeholder="Email Address" class="ring-1  ring-gray-300 outline-none px-4 py-2 mt-2 w-full rounded-md focus:ring-2 focus:ring-teal-300">
            </div>
            <div>
                <label for="">Message</label>
                <textarea name="" id="" cols="30" rows="10  "  class="ring-1  ring-gray-300 outline-none px-4 py-2 mt-2 w-full rounded-md focus:ring-2 focus:ring-teal-300"></textarea>
            </div>
            <button class="uppercase px-6 py-2 rounded-md bg-cyan-700 self-end font-bold text-sm inline-block">send message</button>

        </form>
    </div>
    
  </div>
    

</div>
    
    
@endsection