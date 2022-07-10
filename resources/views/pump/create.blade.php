@extends('layouts.backend')
  
@section('content')


<hr />
<div class="flex justify-center">
        <div class="mb-0">
            <h1 class="text-3xl font-bold">
                Dodaj pompe ciepła
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
<form action="{{ route('pump.store') }}" method="POST">
@csrf
    <div class="grid md:grid-cols-2 gap-8">
        <div class="col-md-6 form-group mb-2">
        <label class="block text-sm font-bold text-gray-700" for="producer_id">Producent</label>
        <select name="producer_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Standard pompy" aria-label="Default select example">
            <option value="0" selected disabled>Wybierz producenta pompy</option>    
            @foreach ($producers as $producer)
            <option value={{$producer->id}}>{{$producer->name}}</option>
            @endforeach
        </select>
            <!-- <label class="block text-sm font-bold text-gray-700" for="title">Typ</label>
            <input type="text" name="type" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Zapotrzebowanie W/m2">
         -->
        </div>
        <div class="col-md-6 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">Linia</label>
            <input type="text" name="line" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Linia pompy">
        </div>
    </div>
    <div class="grid md:grid-cols-2 gap-x-8">
        <div class="col-md-6 form-group mb-2">
                <label class="block text-sm font-bold text-gray-700" for="title">Nazwa</label>
                <input type="text" name="model" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Nazwa pompy">
        </div>
        <div class="col-md-6 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="power">Moc pompy</label>
            <input type="number" name="power" max="50" min="1" step="1" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Podaj moc pompy">
            
        </div>
    <div class="col-md-6 form-group">
        <label class="block text-sm font-bold text-gray-700" for="category_id">Standard pompy</label>
        <select name="category_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Standard pompy" aria-label="Default select example">
            <option value=0 selected disabled>Wybierz standard pompy</option>    
            @foreach ($categories as $category)
            <option value={{$category->id}}>{{$category->name}}</option>
            @endforeach

        </select>
            <!-- <label class="block text-sm font-bold text-gray-700" for="title">Typ</label>
            <input type="text" name="type" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Zapotrzebowanie W/m2">
         -->
    </div>
    <div class="mb-2">
        <label class="block text-sm font-bold text-gray-700" for="title">Standard pompy</label>
        <select name="construction_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Standard pompy" aria-label="Default select example">
            <option value=0 selected disabled>Wybierz typ pompy</option>    
            <option value=1 >Split</option>
            <option value=2 >Monoblok</option>
        </select>
            <!-- <label class="block text-sm font-bold text-gray-700" for="title">Typ</label>
            <input type="text" name="type" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Zapotrzebowanie W/m2">
         -->
    </div>
        <!-- <div class="col-md-6 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">Kategoria</label>
            <input type="text" name="category" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Kategoria">
        </div> -->
        <!-- <div class="col-md-6 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">Temperatura Biwalentna</label>
            <input value="0" type="text" name="tempBiwa" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Temperatura biwalentna">
        </div> -->
    </div>


<fieldset class="border border-solid border-3 border-green-500 p-3">
    <legend>Ogrzewanie podłogowe (35):</legend>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">-20</label>
            <input type="number" step="0.01" name="p35m20" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp -20">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">-15</label>
            <input type="number" step="0.01" name="p35m15" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp -15">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">-7</label>
            <input type="number" step="0.01" name="p35m7" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp -7">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">2</label>
            <input type="number" step="0.01" name="p35p2" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp2 ">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">7</label>
            <input type="number" step="0.01" name="p35p7" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp 7">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">10</label>
            <input type="number" step="0.01" name="p35p10" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp 10">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">12</label>
            <input type="number" step="0.01" name="p35p12" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp 12">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">20</label>
            <input type="number" step="0.01" name="p35p20" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp 20">
        </div>
    </div>
</fieldset>
<fieldset class="border border-solid border-3 border-green-500 p-3">
    <legend>Ogrzewanie podłogowe + grzejniki (45):</legend>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">-20</label>
            <input type="number" step="0.01" name="p45m20" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp -20">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">-15</label>
            <input type="number" step="0.01" name="p45m15" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp -15">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">-7</label>
            <input type="number" step="0.01" name="p45m7" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp -7">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">2</label>
            <input type="number" step="0.01" name="p45p2" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp2 ">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">7</label>
            <input type="number" step="0.01" name="p45p7" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp 7">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">10</label>
            <input type="number" step="0.01" name="p45p10" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp 10">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">12</label>
            <input type="number" step="0.01" name="p45p12" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp 12">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">20</label>
            <input type="number" step="0.01" name="p45p20" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp 20">
        </div>
    </div>
</fieldset>
<fieldset class="border border-solid border-3 border-green-500 p-3">
    <legend>Ogrzewanie grzejnikami (55):</legend>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">-20</label>
            <input type="number" step="0.01" name="p55m20" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp -20">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">-15</label>
            <input type="number" step="0.01" name="p55m15" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp -15">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">-7</label>
            <input type="number" step="0.01" name="p55m7" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp -7">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">2</label>
            <input type="number" step="0.01" name="p55p2" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp2 ">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">7</label>
            <input type="number" step="0.01" name="p55p7" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp 7">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">10</label>
            <input type="number" step="0.01" name="p55p10" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp 10">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">12</label>
            <input type="number" step="0.01" name="p55p12" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp 12">
        </div>
        <div class="col-md-3 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">20</label>
            <input type="number" step="0.01" name="p55p20" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy temp 20">
        </div>
    </div>
</fieldset>

<!-- 
    <div class="row">
        <div class="col-md-4 form-group mb-2">
        <label class="block text-sm font-bold text-gray-700" for="title">Moc 35</label>
            <input type="text" name="power35" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy 35">
            </div>
        <div class="col-md-4 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">Moc 45</label>
            <input type="text" name="power45" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy 45">
        </div>
        <div class="col-md-4 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">Moc 55</label>
            <input type="text" name="power55" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Moc przy 55">
        </div>
    </div> -->
    <div class="grid md:grid-cols-2 gap-8">
        <div class="col-md-6 form-group mb-2">
        <label class="block text-sm font-bold text-gray-700" for="title">Głosność</label>
                                <input type="text" name="volume" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Głosność">
                            </div>
        <div class="col-md-6 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">Cena</label>
            <input type="text" name="price" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Cena">
        </div>
    </div>
    <div class="flex items-center justify-start mt-4 gap-x-2">
        <button type="submit" class="ml-8 px-4 py-2 rounded shadow-sm font-medium text-white bg-purple-700 hover:bg-gray-900">Zapisz</button>
    </div>

</form>


</div>

<!-- 
    <div class="mx-auto mt-8">

        <div class="flex flex-col mt-5">
            <div class="flex flex-col">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">


                    
                    <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">



                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection