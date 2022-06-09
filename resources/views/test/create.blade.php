@extends('layouts.test')
  
@section('content')
<!-- CONTAINER -->
<div class="m-10 px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
   <div class="row justify-content-center">
    <!-- TITLE -->
        <div class="col-lg-6 offset-lg-1 mx-0 px-0">
                <img src="https://wallbox.pl/img/imagecache/1001-2000/6ef1536475a6f8dee1fd0fe5941de622449a7794.jpg" class="w-full" alt="">

        </div>
    
        <!-- FORMS -->
        <div class="col-lg-6 mx-0 px-0">
   <div class="progress">
      <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 0%"></div>
   </div>
   <div id="qbox-container">
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
      <form action="{{ route('house.store') }}" method="POST" class="needs-validation" id="form-wrapper" name="form-wrapper">
          @csrf
         <div id="steps-container">
            <div class="step">
               <h4>Podaj powierzchnie domu:</h4>
               <div class="form-check ps-0 q-box">
                  <div class="q-box__question">
                  <label class="block text-sm font-bold text-gray-700" for="title">Powierzchnia [m2]:</label>

<input class="col-md-6" name="example2" type="range" max="300" min="1" value="180" step="1">
<input required name="surface" value="180" type="number" max="300" min="1" step="1" source="[name=example2]" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Powierzchnia">
        
                  </div>

               </div>
            </div>
            <div class="step">
               <h4>Jaki jest rodzaj budynku?</h4>
               <div class="form-check ps-0 q-box">
                  <div class="q-box__question">
                  <label class="block text-sm font-bold text-gray-700" for="title">Typ budynku</label>
        <select required name="type" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Zapotrzebowanie W/m2" aria-label="Default select example">
            <option value="0" disabled>Wybierz rodzaj budynku</option>
            <option value="0">Budynek pasywny</option>
            <option value="25">Budynek niskoenergetyczny wentylacja mechaniczna</option>
            <option value="40">Budynek energooszcędny wentylacja mechaniczna</option>
            <option value="50">Nowy budynek z wentylacją grawitacyjną</option>
            <option value="75">Stary budynek termomodernizowany</option>
            <option value="100">Stary budynek</option>
        </select>



                  </div>

               </div>
            </div>


            <div class="step">
               <h4>Jak jest ogrzewany dom?</h4>
               <div class="form-check ps-0 q-box">
               <label class="block text-sm font-bold text-gray-700" for="title">Rodzaj ogrzewania</label>
        <select required name="temp" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Zapotrzebowanie W/m2" aria-label="Default select example">
            <option value="0" disabled>Wybierz sposóg ogrzewania</option>
            <option value="35">Ogrzewanie podłogowe</option>
            <option value="45">Ogrzewanie podłogowe i grzejnikowe</option>
            <option value="55">Ogrzewanie grzejnikowe</option>
        </select>
               </div>
            </div>
            <div class="step">
               <h4>Ile osób zamieszkuje budynek?</h4>
               <div class="form-check ps-0 q-box">
               <label class="block text-sm font-bold text-gray-700" for="title">Ciepła Woda Użytkowa (ilość osób)</label>
            <!-- <input name="surface"  type="number"  source="[name=example2]" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Powierzchnia"> -->
            <input required type="number" value="0" name="cwu" max="20" min="0" step="1" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Podaj ilość osób">
            
               </div>
            </div>


            <div class="step">
               <h4>Podaj dane adresowe:</h4>
               <div class="mt-1">
                  <label class="form-label">Imię Nazwisko:</label> 
                  <input class="form-control" id="full_name" name="full_name" type="text">
               </div>
               <div class="mt-2">
                  <label class="form-label">Adres:</label> 
                  <input class="form-control" id="address" name="address" type="text">
               </div>
               <div class="mt-2">
                  <label class="form-label">Email:</label> 
                  <input class="form-control" id="email" name="email" type="email">
               </div>
               <div class="mt-2">
                  <label class="form-label">Telefon:</label> 
                  <input class="form-control" id="phone" name="phone" type="text">
               </div>
               <!-- <div class="row mt-2">
                  <div class="col-lg-2 col-md-2 col-3">
                     <label class="form-label">Age:</label>
                     <div class="input-container">
                        <input class="form-control" id="age" name="age" type="text">
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div id="input-container">
                        <input class="form-check-input" name="gender" type="radio" value="male"> 
                        <label class="form-check-label radio-lb">Male</label> 
                        <input class="form-check-input" name="gender" type="radio" value="female"> 
                        <label class="form-check-label radio-lb">Female</label> 
                        <input checked class="form-check-input" name="gender" type="radio" value="undefined"> 
                        <label class="form-check-label radio-lb">Rather not say</label>
                     </div>
                  </div>
               </div> -->
            </div>
            <!-- <div class="step">
               <div class="mt-1">
                  <div class="closing-text">
                     <h4>That's about it! Stay healthy!</h4>
                     <p>We will assess your information and will let you know soon if you need to get tested for COVID-19.</p>
                     <p>Click on the submit button to continue.</p>
                  </div>
               </div>
            </div> -->
            <div id="success">
               <div class="mt-5">
                  <h4>Wyślij zapytanie</h4>
                  <p>____</p>
                  <a class="back-link" href="">Go back from the beginning ➜</a>
               </div>
            </div>
         </div>
         <div id="q-box__buttons">
            <button id="prev-btn" type="button">Wstecz</button> 
            <button id="next-btn" type="button">Dalej</button> 
            <button id="submit-btn" type="submit">Wyślij</button>
         </div>
      </form>
   </div>
</div>
        </div>
   </div>
</div>
@endsection