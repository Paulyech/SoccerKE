@extends('layouts.app')

@section('content')
<div  style="background-image: url('../images/background4.jpg'); background-position:center; background-size:cover;min-height:100vh;background-attachment:fixed;">


        {{-- card grid start --}}
        <div class="grid lg:grid-cols-3 gap-4 py-8 items-center justify-items-center">

            @foreach ($tactics as $tactic)
                <div class="card ">
                    <h2 class="flex justify-center font-bold text-2xl bg-green-900 py-2 text-pink-100">{{ $tactic->title }}</h2>
                    <img   class="card-img" src="../images/{{ $tactic->image }}" alt="{{ $tactic->title }}">
                    <p class="px-2">
                        {{ Str::limit($tactic->description, 350) }}
                        <form method="post" action="/tactics/{{$tactic->id}}" enctype="multipart/form-data" name="deleteForm">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-danger btn-sm readmore" value="Readmore">
                        </form>

                        
                    </p>
                         
                </div>
            @endforeach
            
        </div>
        {{-- card grid end  --}}
    </div>
@endsection