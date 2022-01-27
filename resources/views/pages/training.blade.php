@extends('layouts.app')

@section('content')
<div  style="background-image: url('../images/background5.jpg'); background-position:center; background-size:cover;min-height:100vh;background-attachment:fixed;">


        {{-- drills-card grid start --}}
        <div class="grid lg:grid-cols-3 gap-4 py-8 items-center justify-items-center">

            {{-- drill 1 --}}
                <div class="card bg-gradient-to-r from-blue-300 to-indigo-600">
                        {{-- heading --}}
                    <h2 class="flex justify-center font-bold text-2xl bg-green-900 py-2 text-pink-100">Soccer Shooting Agility Drill</h2>
                        {{-- heading end  --}}

                            {{-- drill image  --}}
                         <img   class="card-img" src="../images/shooting.jpg" alt="drill">
                            {{-- drill image end  --}}

                            {{-- heading --}}
                    <h3 class="font-semibold px-1">This soccer shooting drill focuses on agility and check-runs after the pass.</h3> 
                            {{-- heading end  --}}

                        {{-- drill setup --}}
                    <span class="flex justify-center font-mono">drill setup</span>
                    <ol class="px-2 list-disc">
                        <li>
                            Use 10-12 cones to create a channel ending near the penalty area.
                        </li> 
                        <li>
                            At the top of the channel, use 4-5 cones to create a line angled towards the corner flag.
                        </li>
                        <li>
                            The shooting players start 4-5 yards at the top of the channel with a ball.
                        </li>
                        
                    </ol> 
                        {{-- drill setup end --}}

                        {{-- readmore button  --}}
                    <a href="/training-drill-1" class="readmore">read more</a>
                       {{-- readmore button end --}}  
                </div>
            {{-- drill 1 end --}}
            
           
            

            {{-- drill 2 --}}
                <div class="card bg-gradient-to-r from-blue-300 to-indigo-600">
                        {{-- heading --}}
                    <h2 class="flex justify-center font-bold text-2xl bg-green-900 py-2 text-pink-100"">1v1 Diamond Shooting Drill</h2>
                        {{-- heading end  --}}

                            {{-- drill image  --}}
                         <img   class="card-img" src="../images/1v1.jpg" alt="drill">
                            {{-- drill image end  --}}

                            {{-- heading --}}
                    <h3 class="font-semibold px-1">This 1v1 drill focuses on a passing combination with movement 
                        off the ball and finishes with a one vs. one to goal. If players 
                        miss they become the keeper and the game continues.</h3> 
                            {{-- heading end  --}}

                        {{-- drill setup --}}
                    <span class="flex justify-center font-mono capitalize">drill setup</span>
                    <ol class="px-2 list-disc">
                        <li>
                            Set cones in the shape of a diamond about 20 yards from goal.
                        </li> 
                        <li>
                            Each cone about 12 yards apart.
                        </li>
                        <li>
                            Adjust the size based on the age and skill level of your players.
                        </li>
                        
                    </ol> 
                        {{-- drill setup end --}}

                        {{-- readmore button  --}}
                    <a href="/training-drill-2" class="readmore">read more</a>
                       {{-- readmore button end --}}  
                </div>
            {{-- drill 2 end --}}
            
           
            

            {{-- drill 3 --}}
                <div class="card bg-gradient-to-r from-blue-300 to-indigo-600">
                        {{-- heading --}}
                    <h2 class="flex justify-center font-bold text-2xl bg-green-900 py-2 text-pink-100"">7v7 Scrimmage</h2>
                        {{-- heading end  --}}

                            {{-- drill image  --}}
                         <img   class="card-img" src="../images/scrim.jpg" alt="drill">
                            {{-- drill image end  --}}

                            {{-- heading --}}
                    <h3 class="font-semibold px-1">A 7v7 scrimmage is a great way to end most of your training sessions.
                        The 7 vs 7 allows players to focus on team tactics in realistic training
                         situations and respond to problems presented in the full-sided game.</h3> 
                            {{-- heading end  --}}

                        {{-- drill setup --}}
                    <span class="flex justify-center font-mono capitalize">drill setup</span>
                    <ol class="px-2 list-disc">
                        <li>
                            Create a field approximately 60 X 40 yards.
                        </li> 
                        <li>
                            Two full-size goals on each end-line.
                        </li>
                        <li>
                            Split the teams evenly into 7 vs 7. Six field players per team and a goalkeeper in each goal.
                        </li>
                        
                    </ol> 
                        {{-- drill setup end --}}

                        {{-- readmore button  --}}
                    <a href="/training-drill-3" class="readmore">read more</a>
                       {{-- readmore button end --}}  
                </div>
            {{-- drill 3 end --}}
            
           
            
            

            {{-- drill 4 --}}
                <div class="card bg-gradient-to-r from-blue-300 to-indigo-600">
                        {{-- heading --}}
                    <h2 class="flex justify-center font-bold text-2xl bg-green-900 py-2 text-pink-100">4v3 Attack vs. Defense</h2>
                        {{-- heading end  --}}

                            {{-- drill image  --}}
                         <img   class="card-img" src="../images/4v3.jpg" alt="drill">
                            {{-- drill image end  --}}

                            {{-- heading --}}
                    <h3 class="font-semibold px-1">This attacking soccer drill is a great drill to
                        focus on finishing. Since the attackers have the numerical advantage,
                         they should learn how to exploit their advantage and finish with a shot on goal.</h3> 
                            {{-- heading end  --}}

                        {{-- drill setup --}}
                    <span class="flex justify-center font-mono capitalize">drill setup</span>
                    <ol class="px-2 list-disc">
                        <li>
                            Set up a 30 X 30 grid with one side playing to goal.
                        </li> 
                        <li>
                            Coach assigns 3 defenders who wear an alternate jersey.
                        </li>
                        
                    </ol> 
                        {{-- drill setup end --}}

                        {{-- readmore button  --}}
                    <a href="/training-drill-4" class="readmore">read more</a>
                       {{-- readmore button end --}}  
                </div>
            {{-- drill 4 end --}}
            
           
            

            {{-- drill 5 --}}
                <div class="card bg-gradient-to-r from-blue-300 to-indigo-600">
                        {{-- heading --}}
                    <h2 class="flex justify-center font-bold text-2xl bg-green-900 py-2 text-pink-100"">Zig-Zag Dribbling Drill</h2>
                        {{-- heading end  --}}

                            {{-- drill image  --}}
                         <img   class="card-img" src="../images/zig.jpg" alt="drill">
                            {{-- drill image end  --}}

                            {{-- heading --}}
                    <h3 class="font-semibold px-1">The Zig-Zag soccer dribbling drill focuses on dribbling with speed with the inside,
                        the outside, and the bottom of the foot.</h3> 
                            {{-- heading end  --}}

                        {{-- drill setup --}}
                    <span class="flex justify-center font-mono capitalize">drill setup</span>
                    <ol class="px-2 list-disc">
                        <li>
                            Setup cones about 5 yards apart in a zig-zag pattern.
                        </li> 
                        <li>
                            The length of the zig-zag pattern should stretch approximately 20 yards in length.
                        </li>
                        
                    </ol> 
                        {{-- drill setup end --}}

                        {{-- readmore button  --}}
                    <a href="/training-drill-5" class="readmore">read more</a>
                       {{-- readmore button end --}}  
                </div>
            {{-- drill 5 end --}}
            
           
            

            {{-- drill 6 --}}
                <div class="card bg-gradient-to-r from-blue-300 to-indigo-600">
                        {{-- heading --}}
                    <h2 class="flex justify-center font-bold text-2xl bg-green-900 py-2 text-pink-100"">4v1 Rondo</h2>
                        {{-- heading end  --}}

                            {{-- drill image  --}}
                         <img   class="card-img" src="../images/rondo.png" alt="drill">
                            {{-- drill image end  --}}

                            {{-- heading --}}
                         <h3 class="font-semibold px-1">This rondo variation is geared for younger player or players you are just introducing to the rondo training..</h3> 
                            {{-- heading end  --}}

                        {{-- drill setup --}}
                    <span class="flex justify-center font-mono capitalize">drill setup</span>
                    <ol class="px-2 list-disc">
                        <li >
                            Create a 10x10 grid.
                        </li> 
                        <li>
                            You will need 5 players per grid. You can place many grids around the field as necessary.
                        </li>
                        
                    </ol> 
                        {{-- drill setup end --}}

                        {{-- readmore button  --}}
                    <a href="/training-drill-6" class="readmore">read more</a>
                       {{-- readmore button end --}}  
                </div>
            {{-- drill 6 end --}}
            
          
        </div>
        {{-- drills-card grid end  --}}
    </div>
@endsection