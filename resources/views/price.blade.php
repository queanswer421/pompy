@extends('layouts.backend')
 
@section('content')

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
                    <p class="text-base mt-4">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo incidunt nostrum vitae dolorem eius voluptas cum ad voluptatibus nesciunt, adipisci deleniti asperiores delectus architecto amet nobis ab enim! Architecto, distinctio.
                    </p>
                    <div class="text-6xl font-bold py-8 border-b border-gray-300 text-purple-800 flex-grow">79 000 zł
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
@endsection