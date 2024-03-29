@extends('layouts.backend')
 
@section('content')

<div class="m-4 mb-8">

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
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Temperatura biwalentna</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">moc -7</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Moc akustyczna [dB]</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">cena</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">***</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">***</th>

                    </tr>
                    <tbody class="bg-white">
                        pompy basic
                        @foreach ($basic as $b)
                        <tr>
                        
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $b->producer->name}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $b->line}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $b->model}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $b->tempBiwa}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $b->heat35->m7}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $b->volume}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $b->price}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$b->offer}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$b->odleglosc}}</td>
                        
                        </tr>
                        @endforeach
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
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Temperatura biwalentna</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">moc -7</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Moc akustyczna [dB]</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">cena</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">***</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">***</th>

                    </tr>
                    <tbody class="bg-white">
                        pompy standard
                        @foreach ($standard as $s)
                        <tr>
                        
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $s->producer->name}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $s->line}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $s->model}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $s->tempBiwa}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $s->heat35->m7}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $s->volume}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $s->price}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $s->offer}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">***</td>
                        
                        </tr>
                        @endforeach
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
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Temperatura biwalentna</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">moc -7</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Moc akustyczna [dB]</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">cena</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">***</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">***</th>

                    </tr>
                    <tbody class="bg-white">
                        pompy pro
                        @foreach ($pro as $p)
                        <tr>
                        
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $p->producer->name}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $p->line}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $p->model}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $p->tempBiwa}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $p->heat35->m7}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $p->volume}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $p->price}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{$p->offer}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">***</td>
                        
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="card-body">
    <div><span id="liczba"></span><span>/{{count($standard)}}</span></div>
    <div><span id="model"></span><span>-</span></div>
    {{-- <div id="fruit"></div>
    <div id="product"></div> --}}
    <button type="button" id="prev" class="btn btn-success float-start">
        wstecz
    </button>
    <button type="button" id="next" class="btn btn-success float-start">
        dalej
    </button>

</div>
<script type="text/javascript">
    var currentCar;
    var poczatek = 0;
    var standard;

    $(window).on('load', function() {
        currentCar = {{$temp}};
        standard = @json($standard);
        // $.getJSON('http://localhost:8000/api/cars', function(jd) {
        //     fruits = jd;
        //     $("#fruit").html(fruits[poczatek]);
        // });
        $("#model").html(standard[currentCar].model);
        $("#liczba").html(currentCar+1);
    });

    $("#prev").click(function(e){
        e.preventDefault();
        if(currentCar>0){
            currentCar=currentCar-1;
            $("#liczba").html(currentCar+1);
            $("#model").html(standard[currentCar].model);
        }
    });
    $("#next").click(function(e){
        e.preventDefault();
        if(currentCar<standard.length-1){
            currentCar=currentCar+1;
            $("#liczba").html(currentCar+1);
            $("#model").html(standard[currentCar].model);
        }
    }); 
</script>
{{-- <div class="m-4 mb-8">
    <div class="flex flex-col mt-10">
        <div class="flex flex-col">
            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full">
                    <tr>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">temp</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">-20</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">-15</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">-7</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">2</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">7</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">10</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">12</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">20</th>

                    </tr>
                    <tbody class="bg-white">
                        temperatura
                        @foreach ($standard as $s)
                        <tr>
                        
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $s->temp}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $s->heat35->p35m20}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $s->heat35->p35m15}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $s->heat35->p35m7}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $s->heat35->p35p2}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $s->heat35->p35p7}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $s->heat35->p35p10}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $s->heat35->p35p12}}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $s->heat35->p35p20}}</td>
                        
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> --}}
@endsection