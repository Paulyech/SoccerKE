@extends('layouts.app')

@section('content')
<div  style="background-image: url('../images/cover1.jpg'); background-position:center; background-size:cover;min-height:100vh;background-attachment:fixed;">

    <div class=" flex  justify-center mb-32 pt-12 ">
        
        <div class="capitalize">
            <h1 class="text-3xl text-white flex justify-center font-bold">soccer world</h1>
            <h2 class="text-2xl font-semibold flex justify-center text-gray-300">know the game</h2>
            <div class="sm:flex justify-center pl-10">
                <p class="lg:text-gray-200 sm:text-gray-600 ">We give you the opportunity to improve your skills in your area of choice <br>
                    Ranging from goalkeeping to defence to attacking tactic plus favorite formations to win you games</p>
            </div>
            @if (session()->has('userDetails'))
            
            @else
                <div class="uppercase flex justify-around  mt-12">
                    <a class="btn-log" href="/login">login </a>
                    <a class="btn-log" href="/register">signup</a>
                </div>
            @endif
            
        </div>
       
        
    </div>

  {{-- grid start  --}}
    <div class="grid lg:grid-cols-3 gap-0">

        {{-- coach quotes grid --}}
        <div class="flex  bg-red-500 opacity-50 hover:opacity-100">
            <img src="../images/fergi3.jpg" alt="" class="object-cover w-36 h-36 rounded ">
            <blockquote cite="https://www.awakenthegreatnesswithin.com/35-inspirational-sir-alex-ferguson-quotes-on-success/" class="text-white" >
                The work of a team should always embrace a great player but the great
                player must always work. '<br> “Very often our victories were squeaked
                 out in the last few minutes after we had drained the life from our opponents.
                Games – like life – are all about waiting for chances and then pouncing on them.<br>
                The way to win battles, wars and games is by attacking
                 and overrunning the opposing side. <br>
                 
      
                     <span class="text-white font-bold"> Sir Alex Ferguson</span>
      
            </blockquote>
        </div>
        {{-- end of coach quote grid --}}

        {{-- intro video grid --}}
        <div class="flex justify-center">
            <video width="540" autoplay >
                <source src="../videos/soccerworld1.mp4" type="video/mp4" >
           </video> 
        </div>
        {{-- end of intro grid --}}

      {{-- player quote grid  --}}
        <div class="flex  bg-red-500 opacity-50 hover:opacity-100">
            <div class="flex  ">
            <img src="../images/pele.jpg" alt="" class="object-cover w-36 h-36 rounded">
            <blockquote cite="https://www.brainyquote.com/quotes/pele_531369" class="text-white">
                I always had a philosophy which I got from my father. He used to say, 'Listen.
                   God gave to you the gift to play football. This is your gift from God.
                   If you take care of your health, if you are in good shape all the time,
                   with your gift from God no one will stop you,
                   but you must be prepared.'<br>
                 
      
                     <span class="text-white font-bold"> Pele</span>
      
            </blockquote>
        </div>
        {{-- end of player quote grid  --}}
    </div>

    {{-- end of grid --}}
</div>  
@endsection