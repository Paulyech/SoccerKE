@extends('layouts.app')

@section('content')

{{-- container start  --}}
    <div class="bg-gray-400 h-full">

      {{-- back button  --}}
      <div class="capitalize backBtn-Container">
        <a href="/training" class="btn-back">go back to drills</a>
      </div>
       {{-- back button end  --}}  
         
       {{-- drill futher  explanation --}}
         <div class="flex justify-center ">
               <div class="w-3/4">

                <ol class=" list-disc">
                   <li>
                     Four offensive players, one on each of the four sidelines positioned outside the area. These players remain on this side of the area and should only travel from left to right along the outside of the area.
                   </li>
                   
                   <li>
                     One defensive player starts inside the area. This player is restricted to defending inside this area and should not move outside the area.
                   </li>
                   <li>
                        You will start with one ball, but make sure you have a supply of balls close
                   </li>
                    
                
                </ol>
                <br>

                <h1 class="font-bold">Drill Instructions</h1> 
                    <ol class="list-disc">
                      
                       <li>The offensive team starts with the ball.</li> 
                        <li>The first pass to another offensive player is free. After this pass, the defensive player attempts to win the ball.</li> 
                        <li>Player 2 passes to player 3 and moves into quickly moves into defensive position.</li> 
                        <li>The offensive players should use their space to quickly pass around the one defender.</li>
                         <li>If the defensive player wins the ball or the ball is grossly misplayed, the player making the mistake switches roles with the defender.</li>
                     
                    </ol>
                    <div class=" flex justify-center my-4">
                        <iframe width="540" height="315" src="https://www.youtube.com/embed/vNV4Wfl3tBk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                    </div>
                    
                   <br>
                   
                  <h1 class="font-bold">Drill Variations </h1> 

                   <ol class="list-disc">
                        <li>
                           For beginners, have the players play with their hands, although do not allow them to throw the ball higher than their heads. This will force players to open up to the side and get players comfortable with the supporting movements.
                        </li>
                         <li>Add a fake before the pass.</li>
                         <li>Limit touches: 1-touch or 2-touch only. Rotate defenders if the touch limit is exceeded.</li>
                        
                   </ol>
                   
                
                   
                    <span class="font-bold">Drill Coaching Points</span>  <br>
                    <ol class="list-decimal">
                       <li>Offensive players should be moving into good supporting angles to assist their teammates.</li>     
                       <li>Quality passes and good first touch is a must.</li>
                       <li>Encourage players to use body feints and fakes to off-balance a close defender.</li>
                       
                    </ol>
 
               </div>
         </div>
         {{-- drill futher  explanation end--}}


         

    </div>
    {{-- container end  --}}
@endsection



 