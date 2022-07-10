@extends('layouts.backend')
  
@section('content')

<div class="row mx-auto mt-4">
        <div class="mb-2">
            <h1 class="text-3xl font-bold">
                Dodaj dom do wyceny
            </h1>
            <!-- <div class="flex justify-end mt-5">
                <a class="px-2 py-1 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600" href="{{ route('pump.index') }}">< Powrót</a>
            </div> -->
        </div>
</div>

<div class="m-10 px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
@if ($errors->any())
                        <div class="p-3 rounded bg-red-500 text-white m-3">
                            <strong>....</strong> ...<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
<form action="{{ route('producer.store') }}" method="POST">
@csrf
<div class="grid md:grid-cols-2 gap-8">
    <div class="col-md-6 form-group mb-2">
        <label class="block text-sm font-bold text-gray-700" for="title">Nazwa producenta</label>
        <input type="text" name="name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Podaj nazwę producenta">
    </div>
</div>
    <div class="flex items-center justify-start mt-4 gap-x-2">
        <button type="submit" class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-green-100 bg-green-500 hover:bg-green-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">Zapisz</button>
    </div>

</form>


</div>

@endsection