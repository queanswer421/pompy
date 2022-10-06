<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>heat pump</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=DM+Sans:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" />
        <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <link rel="stylesheet" href="{{ asset('style.css')}}">
</head>

<body class="font-dm text-gray-900">
    <!-- HEADER -->
    <header class="relative z-20">
        <div class="container relative bg-white">
            <div class="flex justify-between items-center py-6 lg:justify-start">
                <a href="{{ route('home') }}" class="mr-8">
                    <img src="{{ asset('assets/logo.svg')}}" alt="heat pump" class="h-8 sm:h-10 w-auto">
                </a>

                <div class="lg:hidden">
                    <button id="toggle-mobile" class="inline-flex items-center justify-center focus:outline-none">
                        <i class="fas fa-bars text-xl text-purple-900 hover:text-gray-900"></i>
                    </button>
                </div>

                <nav class="hidden lg:flex space-x-10">
                    <div class="relative">
                        <button id="toggle"
                            class="inline-flex items-center font-medium hover:text-purple-900 focus:outline-none">
                            <span>Administrator</span>
                            <i class="fas fa-chevron-down ml-1"></i>
                        </button>

                        <div id="menu"
                            class="hidden absolute z-20 mt-3 px-2 w-screen max-w-md sm:px-0 lg:left-1/2 transform lg:-translate-x-1/2">
                            <div class="rounded-lg shadow-lg ring-1 ring-gray-900 ring-opacity-5 overflow-hidden">
                                <ul class="relative bg-white px-5 py-6 sm:p-8">
                                    <li class="mb-2">
                                        <a href="{{ route('pump.index') }}" class="p-3 flex items-center hover:bg-gray-50">
                                            <i class="far fa-sun text-2xl text-purple-700"></i>
                                            <div class="ml-4">
                                                <p class="font-medium">Pompy</p>
                                                <p class="mt-1 text-sm text-gray-500">Dodaj pompe do bazy.</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ route('house.index') }}" class="p-3 flex items-center hover:bg-gray-50">
                                            <i class="fas fa-home text-2xl text-purple-700"></i>
                                            <div class="ml-4">
                                                <p class="font-medium">Domy</p>
                                                <p class="mt-1 text-sm text-gray-500">Dodaj dom do bazy.</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ route('producer.index') }}" class="p-3 flex items-center hover:bg-gray-50">
                                            <i class="fas fa-home text-2xl text-purple-700"></i>
                                            <div class="ml-4">
                                                <p class="font-medium">Producenci</p>
                                                <p class="mt-1 text-sm text-gray-500">Dodaj producenta.</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#" class="p-3 flex items-center hover:bg-gray-50">
                                            <i class="fas fa-user text-2xl text-purple-700"></i>
                                            <div class="ml-4">
                                                <p class="font-medium">Użytkownicy</p>
                                                <p class="mt-1 text-sm text-gray-500">Zarządzaj użytkownikami.</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#" class="p-3 flex items-center hover:bg-gray-50">
                                            <i class="fas fa-th-large text-2xl text-purple-700"></i>
                                            <div class="ml-4">
                                                <p class="font-medium">Licencje</p>
                                                <p class="mt-1 text-sm text-gray-500">Lista licencji.</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="font-medium hover:text-purple-900">Dla Twojej firmy</a>
                    <a href="#" class="font-medium hover:text-purple-900">Cennik</a>
                    <a href="#" class="font-medium hover:text-purple-900">O nas</a>
                    <a href="/admin" class="font-medium hover:text-purple-900">admin</a>
                </nav>

                <div class="hidden lg:flex lg:flex-1 items-center justify-end">
                    <!-- <a href="/appvue" class="font-medium hover:text-purple-900">Zaloguj się</a> -->
                    <a href="/app"
                        class="ml-8 px-4 py-2 rounded shadow-sm font-medium text-white bg-purple-700 hover:bg-gray-900">
                        Zaloguj się
                    </a>
                </div>
            </div>
            <div id="menu-mobile" class="hidden absolute top-0 p-2 z-20 inset-x-0">
                <div class="rounded-lg shadow-lg ring-1 ring-gray-900 ring-opacity-5 bg-white divide-y-2 divide-gray-50 w-full">
                    <div class="p-5">
                        <div class="flex items-center justify-between">
                            <img src="{{ asset('assets/logo.svg')}}" alt="heat pump" class="h-8 sm:h-10 w-auto">
                            <button id="hide-menu"
                                class="inline-flex items-center text-purple-900 focus:outline-none hover:text-gray-900">
                                <i class="fas fa-times text-2xl"></i>
                            </button>
                        </div>

                        <div class="mt-6">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{ route('pump.index') }}" class="py-3 flex items-center hover:bg-gray-50">
                                            <i class="fas fa-sun text-2xl text-purple-900"></i>
                                            <span class="ml-3 text-base font-medium">
                                                Pompy
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('house.index') }}" class="py-3 flex items-center hover:bg-gray-50">
                                            <i class="fas fa-home text-2xl text-purple-900"></i>
                                            <span class="ml-3 text-base font-medium">
                                                Domy
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="py-3 flex items-center hover:bg-gray-50">
                                            <i class="fas fa-user font-boldtext-2xl text-purple-900"></i>
                                            <span class="ml-3 text-base font-medium">
                                                Użytkownicy
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="py-3 flex items-center hover:bg-gray-50">
                                            <i class="fas fa-th-large text-2xl text-purple-900"></i>
                                            <span class="ml-3 text-base font-medium">
                                                Licencje
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="py-6 px-5 space-y-6">
                        <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                            <a href="#" class="font-medium hover:text-gray-600">
                                Administrator
                            </a>
                            <a href="#" class="font-medium hover:text-gray-600">
                                Dla Twojej firmy
                            </a>
                            <a href="#" class="font-medium hover:text-gray-600">
                                Cennik
                            </a>
                            <a href="#" class="font-medium hover:text-gray-600">
                                O nas
                            </a>
                        </div>

                        <div>
                            <a href="#"
                                class="w-full inline-flex items-center justify-center px-4 py-2 rounded shadow-sm font-medium text-white bg-purple-900 hover:bg-gray-900 focus:outline-none">
                                Zarejestruj się
                            </a>

                            <a href="#"
                                class="w-full inline-flex items-center justify-center px-4 py-2 mt-2 font-medium hover:text-gray-600">
                                Zaloguj się
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
        @yield('content')
      <footer class="mt-8 md:mt-12 lg:mt-20">
          <div class="container">
              <div class="flex flex-wrap justify-between border-t border-gray-300 py-12 lg:py-20">
                  <div class="w-full lg:w-4/12 px-4">
                      <img src="{{ asset('assets/logo.svg')}}" alt="Heat Pump">
                      <p class="text-base mt-4">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Qui sunt, eveniet tempora consequuntur eius eos laudantium voluptates aperiam iure maiores!
                      </p>
                  </div>
      
                  <div class="w-full lg:w-8/12 xl:w-7/12 px-4">
                      <div class="flex flex-wrap justify-between xl:justify-end mb-6">
                          <div class="w-full md:w-4/12 xl:w-3/12 px-0 lg:px-4 pt-6 lg:pt-0">
                              <span class="block font-bold mb-3">
                                  Administrator
                              </span>
                              <ul class="list-none">
                                  <li>
                                      <a href="#" class="text-purple-900 hover:text-gray-900 pb-3 block">Pompy</a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-purple-900 hover:text-gray-900 pb-3 block">Domy</a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-purple-900 hover:text-gray-900 pb-3 block">Użytkownicy</a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-purple-900 hover:text-gray-900 pb-3 block">Licencje</a>
                                  </li>
                              </ul>
                          </div>
      
                          <div class="w-full md:w-4/12 xl:w-3/12 px-0 lg:px-4 pt-6 lg:pt-0">
                              <span class="block font-bold mb-3">
                                  Pompy ciepła
                              </span>
                              <ul class="list-none">
                                  <li>
                                      <a href="#" class="text-purple-900 hover:text-gray-900 pb-3 block">Monobloki</a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-purple-900 hover:text-gray-900 pb-3 block">Splity</a>
                                  </li>
                              </ul>
                          </div>
      
                          <div class="w-full md:w-4/12 xl:w-3/12 px-0 lg:px-4 pt-6 lg:pt-0">
                              <span class="block font-bold mb-3">
                                  Baza wiedzy
                              </span>
                              <ul class="list-none">
                                  <li>
                                      <a href="#" class="text-purple-900 hover:text-gray-900 pb-3 block">Blog</a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-purple-900 hover:text-gray-900 pb-3 block">Centrum pomocy</a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-purple-900 hover:text-gray-900 pb-3 block">Statystyki</a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-purple-900 hover:text-gray-900 pb-3 block">Regulamin</a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-purple-900 hover:text-gray-900 pb-3 block">Polityka prywatność</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
      
              <div class="mb-8 lg:mb-16 flex flex-wrap items-center justify-between">
                  <span class="order-2 sm:order-1 mt-3 sm:mt-0">© 2022 Łukasz. All rights reserved.</span>
                  <div class="flex items-center space-x-2 order-1 sm:order-2">
                      <a href="#" class="bg-purple-900 rounded-full w-6 h-6 text-white text-center">
                          <i class="fab fa-instagram text-sm"></i>
                      </a>
                      <a href="#" class="bg-purple-900 rounded-full w-6 h-6 text-white text-center">
                          <i class="fab fa-twitter text-sm"></i>
                      </a>
                      <a href="#" class="bg-purple-900 rounded-full w-6 h-6 text-white text-center">
                          <i class="fab fa-linkedin-in text-sm"></i>
                      </a>
                      <a href="#" class="bg-purple-900 rounded-full w-6 h-6 text-white text-center">
                          <i class="fab fa-facebook-f text-sm"></i>
                      </a>
                      <!-- <a href="#" class="bg-purple-900 rounded-full w-6 h-6 text-white text-center">
                          <i class="fab fa-pinterest-p text-sm"></i>
                      </a> -->
                  </div>
              </div>
          </div>
      </footer>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
          integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
          crossorigin="anonymous"></script>
      
      <script>
          AOS.init({
              delay: 200,
              duration: 1200,
              once: true
          });
      </script>
      <script>
          const menu = document.querySelector('#menu');
          const menuMobile = document.querySelector('#menu-mobile');
      
          const show = (elem) => {
              return function () {
                  elem.classList.add('flex');
                  elem.classList.remove('hidden');
              }
          }
      
          const hide = (elem) => {
              return function () {
                  elem.classList.add('hidden');
                  elem.classList.remove('flex');
              }
          }
      
          const openMenu = () => {
              if (menu.classList.contains('hidden')) {
                  show(menu)();
              } else {
                  hide(menu)();
              }
          }
      
          document.querySelector('#toggle-mobile').addEventListener('click', show(menuMobile));
          document.querySelector('#hide-menu').addEventListener('click', hide(menuMobile));
          document.querySelector('#toggle').addEventListener('click', openMenu);
          document.addEventListener('click', (event) => {
              if (event.target.parentNode.id !== 'toggle') {
                  hide(menu)();
              }
          });
      </script>
</body>

</html>