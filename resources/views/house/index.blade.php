@extends('layouts.backend')
 
@section('content')

<div class="m-4 mb-8">

        <div class="mb-4">
            <h1 class="text-3xl font-bold text-center">
                Domy wycenione
            </h1>
        </div>

        <div class="flex justify-start mt-10">
            <a href="{{ route('house.create') }}" class="px-2 py-1 rounded-md bg-green-500 text-white hover:bg-green-700">Dodaj dom</a>
        </div>

        <div class="flex flex-col mt-10">
            <div class="flex flex-col">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">

                    @if ($message = Session::get('success'))
                        <div class="p-3 rounded bg-green-500 text-green-100 mb-4 m-3">
                            <span>{{ $message }}</span>
                        </div>
                    @endif

                     <table class="min-w-full">
                        <tr>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">ID</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Powierzchnia</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Typ budynku</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Emisyjność [kW]</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Temperatura grzania</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">CWU [kW]</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Emisyjność temp -15 [kW]</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Emisyjność temp -7 [kW]</th>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Emisyjność temp 2 [kW]</th>

                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50" width="180px">--</th>
                        </tr>
                        <tbody class="bg-white">
                            @foreach ($house as $house)
                            <tr>
                                <td class="px-6 whitespace-no-wrap border-b border-gray-200">{{ ++$i }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $house->surface }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $house->type }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $house->heatDemand }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $house->temp }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $house->cwu }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $house->heatDemandM15 }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $house->heatDemandM7 }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $house->heatDemandP2 }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <!-- <form action="{{ route('house.destroy',$house->id) }}" method="POST"> -->
                        
                                        <a class="text-indigo-600 hover:text-indigo-900" href="{{ route('house.show',$house->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </a>
                                        
                                        <!-- <a href="{{ route('house.edit',$house->id) }}" class="text-indigo-600 hover:text-indigo-900 text-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a> -->
                       
                                        <!-- @csrf
                                        @method('DELETE')
                                        
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600 hover:text-red-800 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>

                                    </form> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection