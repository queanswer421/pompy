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
<form action="{{ route('price.show') }}" method="POST">
@csrf
    <div class="row">
        <div class="col-md-6 form-group mb-2">
            
                <label class="block text-sm font-bold text-gray-700" for="title">Powierzchnia [m2]:</label>

                <input class="col-md-6" name="example2" type="range" max="300" min="1" value="180" step="1">
                
        </div>
        <div class="col-md-6 form-group mb-2">
            <input name="surface" value="180" type="number" max="300" min="1" step="1" source="[name=example2]" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Powierzchnia">
                <!-- <input type="text"  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Temp grzania"> -->
        </div>
            
    </div>
        <!-- <div class="col-md-6 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">Powierzchnia</label>
            <input type="text" name="surface" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Powierzchnia domu">
       </div> -->
    <div class="row">
        <div class="col-md-12 form-group mb-2">
        <label class="block text-sm font-bold text-gray-700" for="title">Typ budynku</label>
        <select name="type" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Zapotrzebowanie W/m2" aria-label="Default select example">
            <option value="0" disabled>Wybierz rodzaj budynku</option>
            <option value="15">[ 15 W/m2 ] Budynek pasywny</option>
            <option value="25">[ 25 W/m2 ] Budynek niskoenergetyczny wentylacja mechaniczna</option>
            <option value="40">[ 40 W/m2 ] Budynek energooszcędny wentylacja mechaniczna</option>
            <option value="50">[ 50 W/m2 ] Nowy budynek z wentylacją grawitacyjną</option>
            <option value="75">[ 75 W/m2 ] Stary budynek termomodernizowany</option>
            <option value="100">[ 100 W/m2 ] Stary budynek</option>
        </select>
            <!-- <label class="block text-sm font-bold text-gray-700" for="title">Typ</label>
            <input type="text" name="type" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Zapotrzebowanie W/m2">
         -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 form-group mb-2">
        <label class="block text-sm font-bold text-gray-700" for="title">Rodzaj ogrzewania</label>
        <select name="temp" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Zapotrzebowanie W/m2" aria-label="Default select example">
            <option value="0" disabled>Wybierz sposóg ogrzewania</option>
            <option value="35">Ogrzewanie podłogowe</option>
            <option value="45">Ogrzewanie podłogowe i grzejnikowe</option>
            <option value="55">Ogrzewanie grzejnikowe</option>
        </select>
        </div>
        <div class="col-md-6 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">Ciepła Woda Użytkowa (ilość osób)</label>
            <!-- <input name="surface"  type="number"  source="[name=example2]" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Powierzchnia"> -->
            <input type="number" value="0" name="cwu" max="20" min="0" step="1" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Podaj ilość osób">
            
        </div>
    </div>
    <div class="row" hidden>
        <div class="col-md-4 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">Emisyjność:</label>
            <input name="_heatDemand" value=0 class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Emisyjność">
         </div>
        <div class="col-md-4 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">Emisyjność:</label>
            <input type="text" name="_temp" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Temp grzania">
        </div>

    </div>
    <div class="flex items-center justify-start mt-4 gap-x-2">
        <button type="submit" class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-green-100 bg-green-500 hover:bg-green-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">Zapisz</button>
    </div>

</form>


</div>

@endsection