@extends('layouts.backend')
 
@section('content')

    <div class="max-w-4xl mx-auto mt-8">

        <div class="mb-4">
            <h1 class="text-3xl font-bold text-center">
            @foreach ($pumps1 as $pump1)
                <div> {{ $pump1->name }} {{ $pump1->power45 }} </div>
            @endforeach
            <hr>
            {{$name->category}}




            <hr>
            @foreach ($pumps3 as $pump3)
                <div> {{ $pump3->name }} {{ $pump3->power45 }} </div>
            @endforeach
            </h1>
        </div>
    </div>
@endsection