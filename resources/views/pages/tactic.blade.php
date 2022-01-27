 @extends('layouts.app')

 @section('content')

   {{-- container start  --}}
 <div class="bg-gray-400">

   {{-- back button start --}}
   <div class="capitalize backBtn-Container">
      <a href="/tactics" class="btn-back">go back to tactics</a>
  </div>
   {{-- back button end --}}  
   

      {{-- tactic  explanation --}} 
      <div class="flex justify-center ">
         <div class="w-3/4">
            <span>
               {{ $tacticDetails->description }}
            </span>
         </div>
   </div>
   {{-- tactic  explanation end--}} 


     {{-- grid start --}} 
   <div class="grid grid-cols-3 gap-4 justify-items-center py-8" style="background-image: url('../images/background5.jpg'); background-position:center; background-size:cover;min-height:;background-attachment:fixed;" >
     
      {{-- merits card --}}
      <div class="card bg-blue-300">
         <h1 class="font-bold capitalize flex justify-center">Strengths</h1> <hr>
         <div class="px-4">
            {{ $tacticDetails->strengths}}      
         </div>
      </div>
      {{-- merits card end  --}}


      {{-- img card --}}
      <div class="card">
         <img src="../images/img25.jpg" alt="" class="img-card">
      </div>
      {{-- img card end  --}}

     {{-- dermerits card --}}
      <div class="card bg-blue-300">
         <h1 class="font-bold capitalize flex justify-center">Weaknesses</h1> <hr>

         <div class="px-4">
            {{ $tacticDetails->weaknesses }} 
         </div>  
      </div>
      {{-- dermerits card end--}}

   </div>
   {{-- grid end--}}


 </div>
 {{-- container end  --}}
                        
 
     
 @endsection
 
 