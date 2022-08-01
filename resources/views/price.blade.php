@extends('layouts.backend')
 
@section('content')
{{-- house section --}}





<!-- PRICING SECTION -->
    <section class="pt-10 md:pt-16 lg:pt-20 overflow-x-hidden md:overflow-x-visible">
        <div class="container relative">
            <img src="assets/Vector@2x.svg" alt="lines" class="absolute -right-24 md:-right-32 -top-24 md:-top-32">
            <div class="flex flex-col items-center text-center z-10">
                <h1 class="text-3xl md:text-5xl font-bold tracking-light">
                    Prosta, przejrzysta wycena
                </h1>
                <p class="w-full md:w-7/12 mt-3 sm:mt-5 text-lg sm:mx-auto md:text-xl">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit sed distinctio ullam incidunt vitae fugit, placeat alias magnam commodi quam facilis voluptatem dolor facere cum id esse ad recusandae eos?
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-x-10 gap-y-10 xl:gap-y-0 mt-12 md:mt-16 lg:mt-24 border-b border-gray-300 pb-12 lg:pb-20 px-0 xl:px-12 2xl:px-20">
                <div class="flex flex-col border border-gray-600 px-8 py-12 text-center bg-white z-10 relative">
                    <span class="absolute -top-6 left-1/2 transform -translate-x-1/2 tracking-wider bg-purple-900 text-white rounded-full px-4 py-2">Basic</span>
                    {{-- <h4 class="font-architect text-3xl text-purple-900">Basic</h4> --}}
                    <img src="https://wallbox.pl/img/imagecache/1001-2000/6ef1536475a6f8dee1fd0fe5941de622449a7794.jpg" class="w-full" alt="">
                    <p class="text-base mt-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
                    <div class="text-6xl font-bold py-8 border-b border-gray-300 flex-grow">Producent model
                        <span class="text-3xl font-normal">linia</span>
                    </div>
                    <ul class="my-6 space-y-5 flex-grow">
                        <li class="flex items-center">
                            <img src="{{ asset('assets/icons/checkmark.svg')}}" alt="checkmark">
                            <span class="ml-3 text-base break-words">temp biwa</span>
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('assets/icons/checkmark.svg')}}" alt="checkmark">
                            <span class="ml-3 text-base break-words">moc (-7)</span>
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('assets/icons/checkmark.svg')}}" alt="checkmark">
                            <span class="ml-3 text-base break-words">głośność u źródła</span>
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('assets/icons/checkmark.svg')}}" alt="checkmark">
                            <span class="ml-3 text-base break-words">cena</span>
                        </li>
                    </ul>
                    <a href="#"
                        class="px-6 py-4 rounded-sm shadow-lg font-medium border border-purple-900 text-purple-900 hover:bg-purple-900 hover:text-white">
                        Zatwierdz</a>
                </div>

                <div class="flex flex-col border-4 border-purple-900 px-8 py-12 text-center bg-white z-10 relative">
                    <span class="absolute -top-6 left-1/2 transform -translate-x-1/2 tracking-wider bg-purple-900 text-white rounded-full px-4 py-2">Standard</span>
                    {{-- <h4 class="font-architect text-3xl text-purple-900">Standard</h4> --}}
                    <img src="https://wallbox.pl/img/imagecache/1001-2000/6ef1536475a6f8dee1fd0fe5941de622449a7794.jpg" class="w-full" alt="">

                    <div class="text-6xl font-bold py-8 border-b border-gray-300 text-purple-800 flex-grow">
                        <span id="sProducer" class="text-5xl font-bold"></span><br>
                        <span id="sModel"class="text-3xl font-normal"></span>
                    </div>
                    <div class="card-body">

                        <button type="button" id="prev" class="px-6 py-4 rounded-sm shadow-lg font-medium border border-purple-900 bg-purple-900 text-white hover:bg-white hover:text-purple-900">
                            << min
                        </button>
                        <button type="button" id="next" class="px-6 py-4 rounded-sm shadow-lg font-medium border border-purple-900 bg-purple-900 text-white hover:bg-white hover:text-purple-900">
                            max >>
                        </button>
            
                    </div>
                    <ul class="my-6 space-y-5 flex-grow">
                        <li class="flex justify-between items-center">
                        <div flex items-center>
                            <img src="{{ asset('assets/icons/checkmark.svg')}}" alt="checkmark">
                            <span class="ml-3 text-base break-words">temperatura biwalentna</span>
                        </div>
                        <span flex items-end>{{$standard[0]->tempBiwa}}</span>
                        </li>
                        <li class="flex justify-between items-center">
                        <div flex items-center>
                            <img src="{{ asset('assets/icons/checkmark.svg')}}" alt="checkmark">
                            <span class="ml-3 text-base break-words">moc (-7)</span>
                            </div>
                            <span flex items-end>{{$standard[0]->power}}</span>
                        </li>
                        <li class="flex justify-between items-center">
                        <div flex items-center>
                            <img src="{{ asset('assets/icons/checkmark.svg')}}" alt="checkmark">
                            <span class="ml-3 text-base break-words">głośność u źródła</span>
                        </div>
                        <span flex items-end>{{$standard[0]->volume}}</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <div flex items-center>
                                <img src="{{ asset('assets/icons/checkmark.svg')}}" alt="checkmark">
                                <span class="ml-3 text-base break-words">cena</span>
                            </div>
                            <span id="sPrice" flex items-end> zł</span>
                        </li>

                    </ul>
                    <p class="text-base my-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo incidunt nostrum vitae dolorem eius voluptas cum ad voluptatibus nesciunt, adipisci deleniti asperiores delectus architecto amet nobis ab enim! Architecto, distinctio.
                    </p>

                    <a href="#"
                        class="px-6 py-4 rounded-sm shadow-lg font-medium border border-purple-900 bg-purple-900 text-white hover:bg-white hover:text-purple-900">
                        Zatwierdz</a>
                </div>

                <div class="flex flex-col border border-gray-600 px-8 py-12 text-center bg-white z-10 relative">
                    <span class="absolute -top-6 left-1/2 transform -translate-x-1/2 tracking-wider bg-purple-900 text-white rounded-full px-4 py-2">Pro</span>
                    {{-- <h4 class="font-architect text-3xl text-purple-900">Pro</h4> --}}
                    <img src="https://wallbox.pl/img/imagecache/1001-2000/6ef1536475a6f8dee1fd0fe5941de622449a7794.jpg" class="w-full" alt="">
                    <p class="text-base mt-4">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab ipsum reprehenderit, consequatur corrupti dolorem itaque cupiditate autem ea necessitatibus dolores? Molestias qui maiores ipsa cupiditate iure, optio dolor consequuntur natus.
                    </p>
                    <div class="text-6xl font-bold py-8 border-b border-gray-300 flex-grow">129 000 zł
                        <span class="text-3xl font-normal"></span>
                    </div>
                    <ul class="my-6 space-y-5 flex-grow">
                        <li class="flex items-center">
                            <img src="{{ asset('assets/icons/checkmark.svg')}}" alt="checkmark">
                            <span class="ml-3 text-base break-words">p1</span>
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('assets/icons/checkmark.svg')}}" alt="checkmark">
                            <span class="ml-3 text-base break-words">p2</span>
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('assets/icons/checkmark.svg')}}" alt="checkmark">
                            <span class="ml-3 text-base break-words">p3</span>
                        </li>
                        <li class="flex items-center">
                            <img src="{{ asset('assets/icons/checkmark.svg')}}" alt="checkmark">
                            <span class="ml-3 text-base break-words">p4</span>
                        </li>
                    </ul>
                    <a href="#"
                        class="px-6 py-4 rounded-sm shadow-lg font-medium border border-purple-900 text-purple-900 hover:bg-purple-900 hover:text-white">
                        Zatwierdz</a>
                </div>
            </div>
            <img src="assets/Vector3.png" alt="lines" class="hidden md:block h-full absolute md:top-0 xl:-bottom-10 2xl:-left-32">
        </div>
    </section>
<!-- section test -->
<div class="m-4 mb-8">
    {{-- {{ dd($__data) }} --}}
    <div class="flex flex-col mt-10">
        <div class="flex flex-col">
            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full">
                    <tr>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">#</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Powierzchnia</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Typ budynku</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Zapotrzebowanie </th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Temp ogrzewania</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">cwu</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">-15</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">-7</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">2</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">???</th>
                    </tr>
                    <tbody class="bg-white">
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200"></td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$house->surface}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$house->type}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$house->heatDemand}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$house->temp}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$house->cwu}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$house->heatDemandM15}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$house->heatDemandM7}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$house->heatDemandP2}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">******</td>
                        </tr>
                    
                        {{-- <tr>
                            @foreach ($chartHouse as $ch)
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $ch }}</td>
                            @endforeach
                        </tr> --}}

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="m-4 mb-8">
    <div class="flex flex-col mt-10">
        <div class="flex flex-col">
            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full">
                    <tr>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Producent</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Linia</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Model</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">temp</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">moc -7</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">głśność u źródła</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">cena</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">***</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">***</th>

                    </tr>
                    <tbody class="bg-white">
                        pompy basic
                        @foreach ($standard as $b)
                        <tr>
                        
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $b->producer->name}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $b->line}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $b->model}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $b->tempBiwa}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $b->heat35->m7}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $b->volume}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $b->price}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">***</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">***</td>
                        
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var currentCar;
    var poczatek = 0;
    var standard;

    $(window).on('load', function() {
        currentCar = {{$offer}};
        standard = @json($standard);
        console.log(standard);
        $("#sProducer").html(standard[currentCar].producer.name);
        $("#sModel").html(standard[currentCar].model);
        $("#sPrice").html(standard[currentCar].price);
    });

    $("#prev").click(function(e){
        e.preventDefault();
        if(currentCar>0){
            currentCar=currentCar-1;
            $("#sProducer").html(standard[currentCar].producer.name);
            $("#sModel").html(standard[currentCar].model);
            $("#sPrice").html(standard[currentCar].price);
        }
    });
    $("#next").click(function(e){
        e.preventDefault();
        if(currentCar<standard.length-1){
            currentCar=currentCar+1;
            $("#sProducer").html(standard[currentCar].producer.name);
            $("#sModel").html(standard[currentCar].model);
            $("#sPrice").html(standard[currentCar].price);
        }
    }); 
</script>
@endsection