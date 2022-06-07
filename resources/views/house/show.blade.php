@extends('house.layout')
 
@section('content')

    <div class="max-w-4xl mx-auto mt-8">

        <div class="mb-4">
            <h1 class="text-3xl font-bold text-center">
            @foreach ($pumps as $pump)
                <div> {{ $pump->name }} </div>
            @endforeach
            </h1>
        </div>
    </div>
@endsection