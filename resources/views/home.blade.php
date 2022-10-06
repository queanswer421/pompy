@extends('layouts.backend')
 
@section('content')
<!-- HERO SECTION -->
<section class="pt-10 md:pt-16 lg:pt-20 overflow-x-hidden md:overflow-x-visible">
    <div class="container relative">
        <img src="assets/Vector@2x.svg" alt="lines" class="absolute -right-24 md:-right-32 -top-24 md:-top-32">
        <div class="flex flex-col items-center text-center" data-aos="fade-in">
            <h1 class="text-2xl md:text-5xl font-bold">
                Twoje centrum doboru pompy ciepła
            </h1>
            <p class="w-full md:w-8/12 mt-3 md:mt-5 sm:text-lg md:text-xl">
                Heat Pump to kompletny zestaw narzędzi doboru pompy ciepła dla twojego domu. Bądź zawsze o krok do przodu
                dzięki naszej zaawansowanej obsłudze klienta.
            </p>

            <div class="my-5 sm:mt-20 sm:flex sm:justify-center w-full">
                <div>
                    <a href="{{ route('houseprice') }}" class="w-full inline-flex justify-center px-8 py-3 md:px-10 text-base md:text-lg rounded text-white bg-purple-900 hover:bg-gray-900 focus:outline-none">Dobór pompy ciepła</a>
                </div>
                <div class="mt-3 sm:mt-0 sm:ml-3">
                    <a href="/welcome" class="w-full inline-flex justify-center px-8 py-3 md:px-10 text-base md:text-lg rounded text-purple-900 bg-purple-300 hover:bg-indigo-200 focus:outline-none">Dowiedz się więcej</a>
                </div>
            </div>
        </div>
        <div class="relative mt-6 md:mt-10 lg:mt-16 z-10">
            <img src="assets/hero.jpg" alt="video" class="min-h-full min-w-full">
            <button class="w-16 h-16 md:w-24 md:h-24 rounded-full inline-flex items-center justify-center bg-purple-900 hover:bg-gray-900 focus:outline-none absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <i class="fas fa-play fa-2x text-white ml-1"></i>
            </button>
        </div>
        <img src="assets/Vector.png" alt="lines"
            class="hidden md:block absolute  -left-2 -bottom-12 h-1/2 md:-left-4 md:-bottom-16 lg:-left-2 lg:-bottom-20 xl:h-3/5 2xl:-left-10">
    </div>
</section>

<!-- INFO SECTION -->
<section class="mt-8 md:mt-16 lg:mt-32 overflow-x-hidden">
    <div class="container">
        <div class="flex flex-col items-center text-center">
            <h2 class="w-full md:w-8/12 text-2xl md:text-4xl font-bold">
                Lorem ipsum dolor sit amet consectetur
            </h2>
            <p class="w-full md:w-8/12 mt-3 sm:mt-5 sm:text-lg md:text-xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus rem dolorem doloremque, nobis necessitatibus alias odit ipsa voluptatum sunt? Laboriosam quod, delectus suscipit doloremque atque eos sed labore a dolorum.
            </p>

            <div class="mt-8 flex justify-center flex-wrap space-x-4 w-full">
                <button class="inline-flex items-center px-5 py-2 mt-4 border border-purple-900 bg-purple-900 text-white rounded-full focus:outline-none">
                    <img src="assets/icons/agency.svg" alt="agency" class="mr-2">
                     pierwsza
                </button>
                <button class="inline-flex items-center px-5 py-2 mt-4 border border-purple-900 text-purple-900 rounded-full focus:outline-none">
                    <img src="assets/icons/ecommerce.svg" alt="agency" class="mr-2">
                     druga
                </button>
                <button class="inline-flex items-center px-5 py-2 mt-4 border border-purple-900 text-purple-900 rounded-full focus:outline-none">
                    <img src="assets/icons/enterprise.svg" alt="agency" class="mr-2">
                     trzecia
                </button>
            </div>
        </div>

        <div class="w-full mt-12 md:mt-16 grid grid-cols-1 md:grid-cols-2 border-b border-gray-300 pb-12 lg:pb-20">
            <div class="bg-purple-100 p-8 lg:p-12 xl:min-h-96 order-2 md:order-1" data-aos="fade-right">
                <div class="flex flex-col text-left w-full 2xl:w-3/4">
                    <h4 class="text-xl xl:text-2xl w-full 2xl:w-3/4 font-bold">
                        Aplikacja doboru pompy ciepła
                    </h4>
                    <p class="text-sm xl:text-base my-6">
                        Podaj parametry swojego domu, a aplikacja dobierze do niego pompe ciepła.
                        Eum inventore ut voluptates, rerum voluptatem sequi, corrupti eveniet fugiat nobis dolorem voluptatibus ea, incidunt modi eaque assumenda possimus. Cupiditate, alias veritatis.
                        Eaque quibusdam exercitationem ipsum! Magnam
                    </p>
                    <a href="#" class="inline-flex p-3 rounded w-50 shadow-sm font-medium text-white bg-fuchsia-900 hover:bg-purple-900 focus:outline-none">
                        Dowiedz się więcej
                        <img src="assets/icons/arrow-right.svg" alt="arrow-right" class="ml-2">
                    </a>
                </div>
            </div>
            <div class="order-1 md:order-2 h-48 sm:h-64 md:min-h-96" data-aos="fade-left">
                <img class="w-full h-full" src="assets/intro.jpg" alt="intro">
            </div>
        </div>
    </div>
</section>

<!-- TOOLS SECTION -->
<section class="mt-8 md:mt-12 lg:mt-20">
    <div class="container">
        <div class="flex flex-col items-center text-center">
            <p class="font-architect w-full md:w-8/12 text-purple-900 sm:mb-4 sm:text-lg md:text-xl">
                Nasza oferta jest dla każdego. 
            </p>
            <h2 class="w-full md:w-8/12 text-2xl md:text-4xl font-bold">
               Narzędzie które dobiera pompe ciepła dla twojego domu
            </h2>
            <p class="w-full md:w-8/12 text-purple-900 sm:mt-4 sm:text-lg md:text-xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla impedit magnam reiciendis vero quos at eveniet rerum enim laborum recusandae illum quo atque, esse cum! Quia repellendus vitae totam nostrum?
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-16 border-b border-gray-300 px-4 xl:px-32 py-12 xl:py-20">
            <div class="flex flex-col items-center text-center">
                <span class="w-16 h-16 rounded-full flex items-center justify-center bg-purple-900 mb-4">
                    <img src="assets/icons/settings.svg" alt="settings">
                </span>
                <h3 class="heading-3 mb-3">Basic</h3>
                <p class="text-lg">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. At nihil dolor sit rerum sapiente consectetur perferendis fugiat maxime velit accusantium, corporis quae ipsum aut quia illo vero, eius voluptatibus natus?
                </p>
            </div>

            <div class="flex flex-col items-center text-center">
                <span class="w-16 h-16 rounded-full flex items-center justify-center bg-purple-900 mb-4 mt-10 lg:mt-0">
                    <img src="assets/icons/raports.svg" alt="raports">
                </span>
                <h3 class="heading-3 mb-3">Standard</h3>
                <p class="text-lg">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero voluptas adipisci explicabo ipsa eum nobis minus. Dolorum nemo, esse quam et eligendi laboriosam mollitia reiciendis, maxime minus, nisi vero laudantium!
                </p>
            </div>

            <div class="flex flex-col items-center text-center">
                <span class="w-16 h-16 rounded-full flex items-center justify-center bg-purple-900 mb-4 mt-10 lg:mt-0">
                    <img src="assets/icons/publish.svg" alt="publish">
                </span>
                <h3 class="heading-3 mb-3">Pro</h3>
                <p class="text-lg">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam repellendus recusandae voluptate dolore consequatur obcaecati architecto autem natus laudantium porro et dolores, velit molestias repudiandae ipsam soluta, culpa pariatur saepe?
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ANALYTICS SECTION -->
<section class="overflow-x-hidden">
    <div class="container">
        <div class="flex flex-wrap items-center justify-center border-b border-gray-300 py-12 lg:py-20">
            <div class="w-full lg:w-5/12 px-2 mx-auto order-2 lg:order-1" data-aos="fade-right">
                <p class="font-architect text-purple-900 mb-2 sm:mb-4 lg:text-lg xl:text-xl">
                    Proste w użyciu narzędzie doboru pompy ciepła
                </p>
                <h3 class="heading-3 mb-2">
                    Pompa ciepła dla domu
                </h3>
                <p class="w-full mt-3 sm:mt-5 lg:text-lg xl:text-xl">
                    Dobór odpowiedniej pompy to podstawa sukcesu. Heat Pump pomoże Ci... Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam veniam, similique recusandae architecto aliquid quaerat commodi sequi aperiam voluptates quis nesciunt cupiditate eius molestiae necessitatibus porro blanditiis officiis soluta. Sunt!
                </p>

                <div class="flex mt-8">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8" src="assets/avatar.png" alt="avatar">
                    </div>
                    <div class="ml-4">
                        <p class="italic">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas laborum enim 
                            sapiente nemo consectetur eum iste dignissimos possimus rem eveniet.
                        </p>
                        <p class="mt-2 text-base">
                            Janek Kowalski - <span class="text-purple-900 font-bold">Castorama</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-3/4 h-full mb-10 lg:mb-0 lg:w-5/12 order-1 lg:order-2" data-aos="fade-left">
                <img src="assets/graphic.jpg" alt="analytics" class="w-full h-full">
            </div>
        </div>
    </div>
</section>

<!-- BLOG --> 
<section class="mt-8 md:mt-12 lg:mt-20 overflow-x-hidden">
    <div class="container">
        <!-- <h2 class="text-center text-2xl md:text-4xl font-bold">
            Zajrzyj na naszego bloga
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-0 md:gap-x-10 xl:gap-x-16 gap-y-12 lg:gap-y-0 px-4 xl:px-12 py-8 lg:py-20">
            <div class="flex flex-col">
                <img src="assets/blog_1.jpg" alt="blog_1" data-aos="flip-up">
                <div class="flex space-x-2 mt-6 mb-3">
                    <span class="px-3 py-2 text-sm rounded-full bg-teal-500 text-white">Poradniki i artykuły</span>
                    <span class="px-3 py-2 text-sm rounded-full bg-indigo-500 text-white">Produkt</span>
                </div>
                <h4 class="text-xl xl:text-2xl font-bold mb-3">
                    Analityka kont na Instagramie w heat pump
                </h4>
                <p class="text-base xl:text-lg flex-grow">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat veniam saepe commodi voluptatum quidem?</p>

                <div class="flex mt-4">
                    <img src="assets/avatar.png" alt="avatar_1" class="h-8 w-8">
                    <p class="ml-4 mt-2 text-base">
                        Kordian Kamiński <span class="text-gray-500 font-bold"> - 1 gru 2020</span>
                    </p>
                </div>
            </div>

            <div class="flex flex-col">
                <img src="assets/blog_2.jpg" alt="blog_1" data-aos="flip-up">
                <div class="flex space-x-2 mt-6 mb-3">
                    <span class="px-3 py-2 text-sm rounded-full bg-red-400 text-white">Funkcjonalności</span>
                    <span class="px-3 py-2 text-sm rounded-full bg-indigo-500 text-white">Produkt</span>
                </div>
                <h4 class="text-xl xl:text-2xl font-bold mb-3">
                    Nowość w heat pump: Planowanie postów na LinkedIn
                </h4>
                <p class="text-base xl:text-lg flex-grow">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat veniam saepe commodi voluptatum quidem?</p>

                <div class="flex mt-4">
                    <img src="assets/avatar2.png" alt="avatar_1" class="h-8 w-8">
                    <p class="ml-4 mt-2 text-base">
                        Kordian Kamiński <span class="text-gray-500 font-bold"> - 1 gru 2020</span>
                    </p>
                </div>
            </div>

            <div class="flex flex-col">
                <img src="assets/blog_3.jpg" alt="blog_1" data-aos="flip-up">
                <div class="flex space-x-2 mt-6 mb-3">
                    <span class="px-3 py-2 text-sm rounded-full bg-yellow-500 text-white">Design</span>
                    <span class="px-3 py-2 text-sm rounded-full bg-teal-500 text-white">Poradniki i artykuły</span>
                </div>
                <h4 class="text-xl xl:text-2xl font-bold mb-3">
                    Jak monitorować konkurencję na Facebooku?
                </h4>
                <p class="text-base xl:text-lg flex-grow">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat veniam saepe commodi voluptatum quidem?</p>

                <div class="flex mt-4">
                    <img src="assets/avatar3.png" alt="avatar_1" class="h-8 w-8">
                    <p class="ml-4 mt-2 text-base">
                        Kordian Kamiński <span class="text-gray-500 font-bold"> - 1 gru 2020</span>
                    </p>
                </div>
            </div>
        </div> -->

        <!-- NEWSLETTER -->
        <div class="flex flex-col md:flex-row items-center justify-center p-8 2xl:p-16 rounded bg-purple-900 text-white space-x-2 relative">
            <div class="w-full md:w-1/2 lg:w-5/12 xl:w-4/12">
                <h3 class="heading-3 mb-2">
                    Zostań z nami
                </h3>
                <p class="mt-3 sm:mt-5 mb-4 lg:mb-0 md:text-base xl:text-lg">
                    Dołącz do naszego newslettera, aby otrzymywać najważniejsze informacje, zanim ktokolwiek inny.
                </p>
            </div>

            <div class="w-full md:w-1/2 lg:w-8/12 xl:w-1/2">
                <form class="h-full w-full flex flex-col lg:flex-row justify-end">
                    <input type="email" name="email" id="email" placeholder="Wpisz tutaj swój adres e-mail.."
                            class="z-10 px-4 py-3 placeholder-purple-300 bg-purple-600 text-white border border-purple-400 rounded focus:outline-none focus:ring-2 focus:ring-purple-400 w-full lg:w-96">
                    <input type="submit" value="Zapisz się" 
                    class="z-10 mt-4 lg:mt-0 lg:ml-4 px-4 py-3 rounded shadow-sm font-medium text-purple-900 bg-white hover:bg-purple-100 focus:outline-none focus:ring-2 focus:ring-purple-400">

                </form>
            </div>
            <img src="assets/newsletter.png" alt="newsletter"
                class="h-full absolute top-0">
        </div>
    </div>
</section>

@endsection