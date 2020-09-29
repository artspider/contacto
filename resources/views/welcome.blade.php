<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"
    />
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config("app.name", "Contacto-Amarillo") }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
    <link
      href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css"
      rel="stylesheet"
    />

    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

  </head>
  <body class="bg-light-back h-screen antialiased leading-none">
    <!-- <div class=" w-3/4 fixed ml-20 mt-20 " id="turn">
      <p class=" bg-black text-xl text-center text-red-step p-8 rounded-lg">
        Por favor rota tu dispositivo!
      </p>
    </div> -->

    <div id="content flex flex-col min-h-screen w-full">
      <header
        class=" w-full fixed z-50 top-0 left-0 transition duration-700 mx-auto bg-black lg:flex lg:flex-row justify-between "
        id="home"
        x-data="{ isOpen: false}"
        @keydown.escape="isOpen = false"
        :class="{ 'shadow-lg bg-gray-900' : isOpen, 'bg-black' : !isOpen }"
      >
        <div
          class="container flex justify-between mx-auto "
          :class="{ 'flex-col': isOpen }"
        >
          <div class=" h-10 lg:h-20 flex relative w-full ">
            <!-- Logo -->
            <div
              class="logo absolute bg-main-yellow ml-4 xl:ml-0 rounded-b-lg z-50 "
            >
              <svg
                class="px-4 h-16 w-16 lg:h-40 lg:w-40"
                viewBox="0 0 354 246"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M73.19 245.94H16C7.16 245.94 0 238.78 0 229.94V60.12C0 51.28 7.16 44.12 16 44.12H65.63C70.35 44.12 74.83 46.2 77.87 49.81C80.91 53.42 82.2 58.18 81.4 62.83C79.98 71.33 79.21 91.53 85.95 99.48C87.28 101.05 89.31 102.66 94.32 102.66C99.18 102.66 101.34 100.95 102.82 99.28C110.49 90.59 110.59 67.99 109.46 59.02C108.88 54.37 110.36 49.69 113.52 46.23C116.68 42.77 121.23 40.88 125.89 41.03L180.94 42.97C189.55 43.27 196.38 50.34 196.38 58.96V94.63C206.4 94.17 218.28 95.68 228.22 102.7C236.18 108.33 245.72 119.59 245.97 141.3C246.24 165.08 236.23 176.93 227.79 182.67C217.31 189.8 204.78 190.75 194.21 189.66L194.34 208.15L321.03 208.46V187.06C309.85 187.18 296.07 185.21 284.85 176.84C276.91 170.92 267.3 159.45 266.58 138.45C266.17 126.43 270.38 115.96 278.76 108.17C290.35 97.41 307.85 94.21 321.03 93.49V73.02H316.73C314.78 73.02 312.41 73.16 309.91 73.31C303 73.72 295.18 74.17 287.68 72.36C280.29 70.57 275.18 63.83 275.45 56.23V56.09C275.45 56.06 275.45 56.03 275.45 56C274.29 49.12 272.79 42.2 269.11 38.3C265.5 34.47 260.64 32 256.74 32C250.27 32 247.67 34.17 246.12 36.06C241.75 41.41 240.3 53.03 242.6 64.3C244.37 72.96 238.78 81.41 230.12 83.17C221.46 84.94 213.01 79.35 211.25 70.69C209.62 62.71 205.54 35.17 221.34 15.82C227.22 8.6 238.15 0 256.73 0C269.39 0 282.71 6.1 292.36 16.33C299.55 23.94 303.05 32.86 305.16 41.53C306.12 41.48 307.08 41.42 308.02 41.37C310.87 41.2 313.82 41.03 316.71 41.03H337.01C345.85 41.03 353.01 48.19 353.01 57.03V109.76C353.01 114.3 351.08 118.63 347.7 121.67C344.32 124.71 339.8 126.16 335.29 125.67C325.03 124.6 306.83 125.76 300.51 131.66C299.5 132.6 298.43 133.9 298.55 137.38C298.89 147.39 302.69 150.25 303.93 151.19C311.24 156.69 326.71 155.18 333.05 153.59C337.85 152.34 342.91 153.39 346.83 156.42C350.75 159.45 353.01 164.13 353.01 169.09V224.53C353.01 228.78 351.32 232.86 348.31 235.86C345.31 238.85 341.25 240.53 337.01 240.53C337 240.53 336.98 240.53 336.97 240.53L178.4 240.14C169.62 240.12 162.5 233.03 162.44 224.25L162.05 169.58C162.01 164.23 164.65 159.22 169.08 156.22C173.51 153.22 179.14 152.63 184.09 154.65C191.48 157.59 204.58 159.8 209.79 156.22C213.53 153.65 214.01 146.01 213.96 141.68C213.88 135.09 212.47 130.77 209.74 128.84C204.13 124.88 191.21 126.84 185.54 128.78C180.65 130.45 175.26 129.65 171.06 126.65C166.86 123.65 164.37 118.8 164.37 113.64V74.41L141.91 73.62C141.43 87.96 138.36 107.35 126.8 120.45C118.6 129.75 107.36 134.67 94.3 134.67C80.84 134.67 69.48 129.63 61.44 120.09C50.87 107.54 48.45 89.65 48.41 76.12H32V213.94H51.92C50.83 204.29 51.96 194.79 55.37 186.22C60.62 173.05 71.13 163.01 84.97 157.94C98.13 153.12 113.19 155.29 125.27 163.72C137.76 172.45 145.21 186.33 145.21 200.85C145.21 227.81 127.86 244.01 125.88 245.76L104.62 221.84L104.46 221.99C104.82 221.65 113.21 213.61 113.21 200.85C113.21 196.83 110.81 192.65 106.94 189.95C105.25 188.77 100.81 186.22 95.97 187.99C90.57 189.97 87.02 193.26 85.1 198.07C82.35 204.97 83.25 214.22 87.52 222.82C89.98 227.78 89.71 233.66 86.79 238.37C83.87 243.08 78.72 245.94 73.19 245.94Z"
                  fill="black"
                />
              </svg>
            </div>
            <!-- Termina logo -->

            <!-- Boton menu hamburguesa -->
            <div class="menu__ham lg:hidden absolute right-0 mt-2 pr-4">
              <button
                type="button"
                class="  text-gray-500 lg:hidden focus:text-white focus:outline-none "
                x-on:click="isOpen=!isOpen"
                :class="{ 'transition transform-180': isOpen }"
              >
                <svg
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  class="menu w-6 h-6"
                >
                  <path
                    fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
            </div>
            <!-- Termina boton menu hamburguesa -->

            <!-- Menu lista -->
            <nav
              class="menu__lista md:w-full md:h-full md:absolute md:right-0 lg:flex lg:justify-end lg:items-center"
              @click.away="isOpen = false"
              x-show.transition="true"
              :class="{  'block shadow-3xl': isOpen,'hidden' : !isOpen }"
            >
              <ul
                class="flex flex-col lg:h-full lg:flex-row lg:items-center lg:justify-end text-white font-semibold ml-6 lg:mr-4 pt-10 pb-6 lg:pt-0 lg:pb-0"
              >
                <li
                  class="mr-8 px-2 py-2      lg:mx-0 lg:my-0 rounded hover:bg-gray-800"
                >
                  <a class=" transition duration-700 " href="#home"> Home </a>
                </li>
                <li
                  class="mt-1 mr-8 px-2 py-2 lg:mx-0 lg:my-0 rounded hover:bg-gray-800"
                >
                  <a class=" transition duration-700 " href="#como__funciona">
                    ¿Cómo funciona?
                  </a>
                </li>
                <li
                  class="mt-1 mr-8 px-2 py-2 lg:mx-0 lg:my-0 rounded hover:bg-gray-800"
                >
                  <a
                    class=" transition duration-700 "
                    href="#nuestros__expertos"
                  >
                    Nuestros expertos
                  </a>
                </li>
                <li
                  class="mt-1 mr-8 px-2 py-2 lg:ml-0 lg:mr-0 lg:my-0 rounded hover:bg-gray-800"
                >
                  <a href="#registro"> Registrate </a>
                </li>
                <li
                  class="ml-1 md:ml-2 mr-8  px-2   md:px-3 py-2         lg:mr-0 lg:my-0 rounded bg-red-700 text-white hover:bg-red-500 hover:text-white"
                >
                  <a href="/login">Ingresa</a>
                </li>
              </ul>
            </nav>
            <!-- Termina Menu lista -->
          </div>
        </div>
      </header>

      <main class="main__body h-screen mt-10 md:mt-10 lg:mt-20 md:pb-52 ">
        <div class="container mx-auto flex flex-col justify-center ">
          <div
            class="main__title w-3/5 lg:w-5/12 xl:w-1/2 ml-4 xl:ml-0 mr-10  text-black text-5xl font-bold "
          >
            <p
              class="main__title--text mt-28 md:mt-40 lg:mt-32 xl:mt-36 2xl:mt-64 text-4xl md:text-6xl leading-tight"
            >
              Haz realidad todos tus proyectos.
            </p>
          </div>
          <div
            class="flex flex-col flex-shrink lg:ml-0 md:justify-start lg:pb-20"
          >
            {{-- <p
              class="main__info md:w-1/2 2xl:w-2/5 leading-5 xl:leading-8 2xl:leading-10 py-2  lg:text-xl xl:mx-0 lg:text-gray-800 font-medium  mt-8 xl:mt-10 mb-6 xl:mb-10 bg-white xl:bg-transparent bg-opacity-25"
            >
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro
              quaerat quibusdam modi delectus vero itaque?
            </p> --}}
            <a
              class="btn btn--primary w-3/5 md:w-1/2 lg:w-2/5 mx-4 xl:mx-0 mt-8 xl:mt-14 px-4 py-6 lg:py-8 lg:text-xl text-center font-bold rounded-md text-sm"
              href="#"
              >Contrata a uno de nuestros expertos</a
            >
          </div>
        </div>
      </main>

      <div
        class="como__funciona container mx-auto my-16"
        id="como__funciona"
        x-data="{ option: 1 }"
      >
        <p
          class="text-black text-center mx-4  text-3xl lg:text-5xl font-bold mb-8 xl:mb-16"
        >
          ¿Cómo funciona?
        </p>

        <div
          class="como--seleccion flex justify-between mx-4 xl:mx-0 mb-8 xl:mb-12"
        >
          <a
            class="btn--registro btn w-1/2 rounded-md text-xs lg:text-base tracking-tight lg:tracking-wide text-center font-bold py-4 lg:py-8 mr-1 lg:mr-8"
            href="#"
            @click="option = 1"
            @click.prevent
            :class="{ 'bg-black text-white': option==1, 'bg-main-yellow text-black': option==2 }"
          >
            Busco profesionista
          </a>
          <a
            class="btn--registro btn w-1/2 rounded-md text-xs lg:text-base tracking-tight lg:tracking-wide text-center font-bold py-4 lg:py-8 ml-1 lg:ml-8"
            href="#"
            @click="option = 2"
            @click.prevent
            :class="{ 'bg-main-yellow text-black': option==1, 'bg-black text-white': option==2 }"
          >
            Soy un experto
          </a>

          {{--
          <a
            class="btn btn--primary   xl:h-20 rounded-md text-sm xl:text-base text-center font-bold flex-grow mr-2 xl:mr-0 max-w-xl py-4 xl:pt-8"
            href="#"
            >Busco profesionista</a
          >
          <a
            class="btn btn--secondary xl:h-20 rounded-md text-sm xl:text-base text-center font-bold flex-grow ml-2 xl:ml-0 max-w-xl py-4 xl:pt-8"
            href="#"
            >Soy un experto</a
          >
          --}}
        </div>

        {{-- <p class="leading-7 mb-8 mx-4 xl:mx-0 text-justify">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ipsa
          molestias qui adipisci ex id! Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Nulla quaerat quam atque, vel voluptatum molestias.
        </p> --}}

        <div
          class="pasos__profesionista flex flex-wrap justify-center mx-auto lg:ml-28 2xl:ml-0 font-semibold"
          :class="{'flex': option==1, 'hidden' : option==2 }"
        >
          <div
            class="pasos--get-pro relative lg:w-64 lg:h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg"
          >
            <img class="" src="./img/busco_paso1.png" alt="" />
            <p
              class="text-xs leading-5 md:leading-6 xl:leading-8 md:text-lg xl:text-xl absolute top-0 left-0 ml-8 md:pl-8 lg:pl-8 mr-8 md:pr-6 lg:mr-40 xl:mr-64 2xl:mr-16 xl:pr-2 mt-8 lg:mt-16 xl:mt-14 2xl:mt-14 md:pt-12 lg:pt-0"
            >
              Registrate y llena todos los campos del formulario de usuario
            </p>
          </div>

          <div
            class="pasos--get-pro relative lg:w-64 lg:h-56 lg:mb-16 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg"
          >
            <img class="" src="./img/busco_paso2.png" alt="" />
            <p
              class="text-xs leading-5 md:leading-6 xl:leading-8 md:text-lg xl:text-xl absolute top-0 left-0 ml-8 md:pl-8 lg:pl-8 mr-8 md:pr-6 lg:mr-40 xl:mr-64 2xl:mr-16 xl:pr-2 mt-8 lg:mt-16 xl:mt-14 2xl:mt-14 md:pt-12 lg:pt-0"
            >
              Selecciona el perfil del profesionista que necesitas
            </p>
          </div>

          <div
            class="pasos--get-pro relative lg:w-64 lg:h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg"
          >
            <img class="" src="./img/busco_paso3.png" alt="" />
            <p
              class="text-xs leading-5 md:leading-6 xl:leading-8 md:text-lg xl:text-xl absolute top-0 left-0 ml-8 md:pl-8 lg:pl-8 mr-8 md:pr-6 lg:mr-40 xl:mr-64 2xl:mr-16 xl:pr-2 mt-8 lg:mt-16 xl:mt-14 2xl:mt-14 md:pt-12 lg:pt-0 "
            >
              Contacta al profesionista para elaborar tu proyecto
            </p>
          </div>

          <div
            class="pasos--get-pro relative lg:w-64 lg:h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg"
          >
            <img class="" src="./img/busco_paso4.png" alt="" />
            <p
              class="text-xs leading-5 md:leading-6 xl:leading-8 md:text-lg xl:text-xl absolute top-0 left-0 ml-8 md:pl-8 lg:pl-8 mr-8 md:pr-6 lg:mr-40 xl:mr-64 2xl:mr-16 xl:pr-2 mt-8 lg:mt-16 xl:mt-14 2xl:mt-14 md:pt-12 lg:pt-0"
            >
              Califica tu experiencia con el profesionista
            </p>
          </div>
        </div>

        <div
          class="pasos__experto flex-wrap justify-center mx-auto lg:ml-28 2xl:ml-0 font-semibold"
          :class="{'hidden': option==1, 'flex' : option==2 }"
        >
          <div
            class="pasos--get-pro relative lg:w-64 lg:h-56 lg:mb-12 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg"
          >
            <img class="" src="./img/experto_paso1.png" alt="" />
            <p
              class="text-xs leading-5 md:leading-6 xl:leading-8 md:text-lg xl:text-xl absolute top-0 left-0 ml-8 md:ml-13 md:mr-10 lg:pl-4 mr-8 lg:mr-48 xl:mr-64 2xl:mr-12 mt-6 md:mt-16 lg:mt-16 "
            >
              Registrate y llena todos los campos del formulario de
              profesionista
            </p>
          </div>

          <div
            class="pasos--get-pro relative lg:w-64 lg:h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg"
          >
            <img class="" src="./img/experto_paso2.png" alt="" />
            <p
              class="text-xs leading-5 md:leading-6 xl:leading-8 md:text-lg xl:text-xl absolute top-0 left-0 ml-8 md:ml-13 md:mr-10 lg:pl-4 mr-8 lg:mr-48 xl:mr-64 2xl:mr-12 mt-6 md:mt-16 lg:mt-16"
            >
              Selecciona tus habilidades, así te encontrarán mas facilmente
            </p>
          </div>

          <div
            class="pasos--get-pro relative lg:w-64 lg:h-56 lg:mb-12 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg"
          >
            <img class="" src="./img/experto_paso3.png" alt="" />
            <div
              class="text-xs leading-5 md:leading-6 xl:leading-8 md:text-lg xl:text-xl absolute top-0 left-0 ml-8 md:ml-13 md:mr-10 lg:pl-4 mr-8 lg:mr-48 xl:mr-64 2xl:mr-12 mt-6 md:mt-16 lg:mt-16 "
            >
              <p class="mb-1">Suscribete:</p>
              <a class=" cursor-pointer text-gray-600" href=""
                >Consulta nuestros planes y precios</a
              >
            </div>
          </div>

          <div
            class="pasos--get-pro relative lg:w-64 lg:h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg"
          >
            <img class="" src="./img/experto_paso4.png" alt="" />
            <p
              class="text-xs leading-5 md:leading-6 xl:leading-8 md:text-lg xl:text-xl absolute top-0 left-0 ml-8 md:ml-13 md:mr-10 lg:pl-4 mr-8 lg:mr-48 xl:mr-64 2xl:mr-12 mt-6 md:mt-16 lg:mt-16"
            >
              Revisa y contesta los mensajes de tus clientes lo mas rápido
              posible
            </p>
          </div>

          <div
            class="pasos--get-pro relative lg:w-64 lg:h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg"
          >
            <img class="" src="./img/experto_paso5.png" alt="" />
            <p
              class="text-xs leading-5 md:leading-6 xl:leading-8 md:text-lg xl:text-xl absolute top-0 left-0 ml-8 md:ml-13 md:mr-10 lg:pl-4 mr-8 lg:mr-48 xl:mr-64 2xl:mr-12 mt-6 md:mt-16 lg:mt-16"
            >
              Entrega tu trabajo en tiempo y forma para recibir una excelente
              reseña
            </p>
          </div>

          <div
            class="pasos--get-pro relative lg:w-64 lg:h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg"
          >
            <img class="" src="./img/experto_paso6.png" alt="" />
            <p
              class="text-xs leading-5 md:leading-6 xl:leading-8 md:text-lg xl:text-xl absolute top-0 left-0 ml-8 md:ml-13 md:mr-10 lg:pl-4 mr-8 lg:mr-48 xl:mr-64 2xl:mr-12 mt-6 md:mt-16 lg:mt-16"
            >
              Los costos, pagos y recibos los negocias con tu cliente
            </p>
          </div>
        </div>
      </div>

      <div
        class="expertos container bg-light-back mb-16 mx-auto"
        id="nuestros__expertos"
      >
        <div class="expertos--header flex justify-start mt-20 mx-4 xl:mx-0 mb-6">
          <svg
            class=" w-8 h-12 lg:w-12 lg:h-16 "
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 0 246 353"
          >
            <image
              id="Capa_1"
              data-name="Capa 1"
              xlink:href="data:img/png;base64,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"
            />
          </svg>
          <p
            class="text-black text-center text-3xl xl:text-5xl tracking-tight font-bold ml-2"
          >
            Nuestros expertos
          </p>
        </div>

        <div class="expertos-cards flex justify-evenly flex-wrap md:flex-no-wrap ">
          <div class="card1 bg-white mx-4 my-4 rounded-lg shadow-lg xl:w-2/5 ">
            <div class="header--card1 flex items-center mt-6 mb-2 ">
              <img
                class="h-24 w-24 ml-6"
                src="./img/avatar1.png"
                alt="avatar1"
              />
              <div class="info--header-card1 text-sm ml-6">
                <p class="nombre font-semibold mb-2">Luis Fernando Flores</p>
                <p class="carrera font-semibold mb-2">Ingeniero en Sistemas</p>
                <p class="cedula font-semibold">Cédula Prof. 09825772</p>
              </div>
            </div>

            <div class="pills-cards flex-wrap ml-6 mb-6">
              <span
                class="inline-block bg-black rounded-full px-3 py-3 text-xs font-semibold text-gray-100 mr-1 mb-1"
                >#edición</span
              >
              <span
                class="inline-block bg-black rounded-full px-3 py-3 text-xs font-semibold text-gray-100 mr-1 mb-1"
                >#diseño</span
              >
              <span
                class="inline-block bg-black rounded-full px-3 py-3 text-xs font-semibold text-gray-100 mr-1 mb-1"
                >#programación</span
              >
            </div>

            <p
              class="descripcion--expertos-cards leading-6 text-justify  font-semibold mx-6 mb-6"
            >
              Full stack developer, experto en desarrollo de aplicaciones móviles en lenguajes nativos
              o frameworks cross plataform. Egresado de la carrera de sistemas en la BUAP.
            </p>
            <div class="mx-6">
              <button
                class="contactar--expertos-card btn btn--secondary  font-bold w-full rounded-md py-6 mb-6"
              >
                Contactar
              </button>
            </div>
          </div>

          <div class="card1 bg-white mx-4 my-4 rounded-lg shadow-lg xl:w-2/5 ">
            <div class="header--card1 flex items-center mt-6 mb-2 ">
              <img
                class="h-24 w-24 ml-6"
                src="./img/avatar2.png"
                alt="avatar1"
              />
              <div class="info--header-card1 text-sm ml-6">
                <p class="nombre font-semibold mb-2">Carla Sannit Gómez</p>
                <p class="carrera font-semibold mb-2">Licenciada en Administración</p>
                <p class="cedula font-semibold">Cédula Prof. 09825772</p>
              </div>
            </div>

            <div class="pills-cards flex-wrap ml-6 mb-6">
              <span
                class="inline-block bg-black rounded-full px-3 py-3 text-xs font-semibold text-gray-100 mr-1 mb-1"
                >#RH</span
              >
              <span
                class="inline-block bg-black rounded-full px-3 py-3 text-xs font-semibold text-gray-100 mr-1 mb-1"
                >#Hoteleria</span
              >
              <span
                class="inline-block bg-black rounded-full px-3 py-3 text-xs font-semibold text-gray-100 mr-1 mb-1"
                >#RP</span
              >
            </div>

            <p
              class="descripcion--expertos-cards leading-6 text-justify  font-semibold mx-6 mb-6"
            >
              Egresada de la Universidad de Guadalupe, en Monterrey. Especialista es administración de personal y
              Relaciones Públicas. Experiencia mayormente en hoteleria.
            </p>
            <div class="mx-6">
              <button
                class="contactar--expertos-card btn btn--secondary  font-bold w-full rounded-md py-6 mb-6"
              >
                Contactar
              </button>
            </div>
          </div>

        </div>
      </div>

      {{-- !!!Rgister form --}}
      <livewire:signup-form />
      {{-- End of Register form --}}

      <footer
        class=" w-full h-32 flex flex-col justify-center text-center"
        style="background-image: url('img/bg-footer-sm.png')"
      >
        <p class="footer--brand text-sm font-bold">Contacto-Amarillo - 2020</p>
        <p class="footer--tm text-xs tracking-tight font-semi-bold">
          Todos los derechos reservados
        </p>
        <div class="footer--redes"></div>
        <div
          class="footer--back2top absolute bottom-0 right-0 mr-4 mb-4 text-xs tracking-tight font-semi-bold"
        >

        </div>
      </footer>
    </div>
    @include('sweetalert::alert')
    @livewireScripts
    <script type="text/javascript">
      window.addEventListener("scroll", function() {
        var header = document.querySelector("header");
        var logo = document.querySelector(".logo");
        header.classList.toggle("sticky", window.scrollY > 0);
        logo.classList.toggle("hidden", window.scrollY > 0);
      });
    </script>

  </body>
</html>
