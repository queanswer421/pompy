@extends('layouts.backend')
  
@section('content')


<hr />
<div class="row mx-auto mt-4">
        <div class="mb-2">
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
    <div class="row">
        <!-- <div class="col-md-6 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">Producent</label>
            <input type="text" name="prod" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Nazwa pompy">
        </div> -->
        <div class="col-md-6 form-group mb-2">
        <label class="block text-sm font-bold text-gray-700" for="title">Producent</label>
        <select name="producer" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Standard pompy" aria-label="Default select example">
            <option value="0" selected disabled>Wybierz producenta pompy</option>    
            <option value="Hyunday" >Hyunday</option>
            <option value="Dimplex">Dimplex</option>
            <option value="Buderus">Buderus</option>
        </select>
            <!-- <label class="block text-sm font-bold text-gray-700" for="title">Typ</label>
            <input type="text" name="type" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Zapotrzebowanie W/m2">
         -->
        </div>
        <div class="col-md-6 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">Nazwa</label>
            <input type="text" name="model" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Nazwa pompy">
        </div>
    </div>
    <div class="row">

    <div class="col-md-6 form-group mb-2">
        <label class="block text-sm font-bold text-gray-700" for="title">Standard pompy</label>
        <select name="category" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Standard pompy" aria-label="Default select example">
            <option value="0" selected disabled>Wybierz standard pompy</option>    
            <option value="3" >Basic</option>
            <option value="2">Standard</option>
            <option value="1">Pro</option>
        </select>
            <!-- <label class="block text-sm font-bold text-gray-700" for="title">Typ</label>
            <input type="text" name="type" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Zapotrzebowanie W/m2">
         -->
        </div>
        <!-- <div class="col-md-6 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">Kategoria</label>
            <input type="text" name="category" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Kategoria">
        </div> -->
        <div class="col-md-6 form-group mb-2">
            <label class="block text-sm font-bold text-gray-700" for="title">Temperatura Biwalentna</label>
            <input value="0" type="text" name="tempBiwa" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Temperatura biwalentna">
        </div>
    </div>
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
    </div>
    <div class="row">
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
        <button type="submit" class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-green-100 bg-green-500 hover:bg-green-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">Zapisz</button>
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