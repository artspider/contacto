<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Subcontrata</title>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
    <link
      href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css"
      rel="stylesheet"
    />

    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="bg-light-back ">

  {{-- <div class=" w-3/4 fixed ml-20 mt-20 " id="turn">
    <p class=" bg-black text-xl text-center text-red-step p-8 rounded-lg">Por favor rota tu dispositivo!</p>
  </div>

  <div id="content"> --}}

  <div class="min-h-screen flex flex-col">
    <header class="bg-black h-16 xl:h-20 flex items-center justify-between fixed w-full 2xl:pl-16 2xl:pr-16 z-50 flex-shrink-0">
      <livewire:logout />

          <!-- Logo -->
          <svg
            class="px-3 h-16 w-16 xl:h-28 xl:w-28 text-main-yellow mr-4"
            viewBox="0 0 354 246"
            fill="currentColor"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M73.19 245.94H16C7.16 245.94 0 238.78 0 229.94V60.12C0 51.28 7.16 44.12 16 44.12H65.63C70.35 44.12 74.83 46.2 77.87 49.81C80.91 53.42 82.2 58.18 81.4 62.83C79.98 71.33 79.21 91.53 85.95 99.48C87.28 101.05 89.31 102.66 94.32 102.66C99.18 102.66 101.34 100.95 102.82 99.28C110.49 90.59 110.59 67.99 109.46 59.02C108.88 54.37 110.36 49.69 113.52 46.23C116.68 42.77 121.23 40.88 125.89 41.03L180.94 42.97C189.55 43.27 196.38 50.34 196.38 58.96V94.63C206.4 94.17 218.28 95.68 228.22 102.7C236.18 108.33 245.72 119.59 245.97 141.3C246.24 165.08 236.23 176.93 227.79 182.67C217.31 189.8 204.78 190.75 194.21 189.66L194.34 208.15L321.03 208.46V187.06C309.85 187.18 296.07 185.21 284.85 176.84C276.91 170.92 267.3 159.45 266.58 138.45C266.17 126.43 270.38 115.96 278.76 108.17C290.35 97.41 307.85 94.21 321.03 93.49V73.02H316.73C314.78 73.02 312.41 73.16 309.91 73.31C303 73.72 295.18 74.17 287.68 72.36C280.29 70.57 275.18 63.83 275.45 56.23V56.09C275.45 56.06 275.45 56.03 275.45 56C274.29 49.12 272.79 42.2 269.11 38.3C265.5 34.47 260.64 32 256.74 32C250.27 32 247.67 34.17 246.12 36.06C241.75 41.41 240.3 53.03 242.6 64.3C244.37 72.96 238.78 81.41 230.12 83.17C221.46 84.94 213.01 79.35 211.25 70.69C209.62 62.71 205.54 35.17 221.34 15.82C227.22 8.6 238.15 0 256.73 0C269.39 0 282.71 6.1 292.36 16.33C299.55 23.94 303.05 32.86 305.16 41.53C306.12 41.48 307.08 41.42 308.02 41.37C310.87 41.2 313.82 41.03 316.71 41.03H337.01C345.85 41.03 353.01 48.19 353.01 57.03V109.76C353.01 114.3 351.08 118.63 347.7 121.67C344.32 124.71 339.8 126.16 335.29 125.67C325.03 124.6 306.83 125.76 300.51 131.66C299.5 132.6 298.43 133.9 298.55 137.38C298.89 147.39 302.69 150.25 303.93 151.19C311.24 156.69 326.71 155.18 333.05 153.59C337.85 152.34 342.91 153.39 346.83 156.42C350.75 159.45 353.01 164.13 353.01 169.09V224.53C353.01 228.78 351.32 232.86 348.31 235.86C345.31 238.85 341.25 240.53 337.01 240.53C337 240.53 336.98 240.53 336.97 240.53L178.4 240.14C169.62 240.12 162.5 233.03 162.44 224.25L162.05 169.58C162.01 164.23 164.65 159.22 169.08 156.22C173.51 153.22 179.14 152.63 184.09 154.65C191.48 157.59 204.58 159.8 209.79 156.22C213.53 153.65 214.01 146.01 213.96 141.68C213.88 135.09 212.47 130.77 209.74 128.84C204.13 124.88 191.21 126.84 185.54 128.78C180.65 130.45 175.26 129.65 171.06 126.65C166.86 123.65 164.37 118.8 164.37 113.64V74.41L141.91 73.62C141.43 87.96 138.36 107.35 126.8 120.45C118.6 129.75 107.36 134.67 94.3 134.67C80.84 134.67 69.48 129.63 61.44 120.09C50.87 107.54 48.45 89.65 48.41 76.12H32V213.94H51.92C50.83 204.29 51.96 194.79 55.37 186.22C60.62 173.05 71.13 163.01 84.97 157.94C98.13 153.12 113.19 155.29 125.27 163.72C137.76 172.45 145.21 186.33 145.21 200.85C145.21 227.81 127.86 244.01 125.88 245.76L104.62 221.84L104.46 221.99C104.82 221.65 113.21 213.61 113.21 200.85C113.21 196.83 110.81 192.65 106.94 189.95C105.25 188.77 100.81 186.22 95.97 187.99C90.57 189.97 87.02 193.26 85.1 198.07C82.35 204.97 83.25 214.22 87.52 222.82C89.98 227.78 89.71 233.66 86.79 238.37C83.87 243.08 78.72 245.94 73.19 245.94Z"
            />
          </svg>

          <!-- Termina logo -->

    </header>

    @yield('content')

    <footer id="footer" class="bg-black fixed bottom-0 w-full rounded-t-md h-16 flex justify-around items-center mt-10 flex-shrink-0 ">

        <div class="icono">
        <a href="/employer">
        <svg class="h-8 w-8 text-main-yellow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
        </svg>
        </a>
      </div>

      <div class="icono">
        <a href="{{ Route('employers-alerts') }}">
        <svg class="h-8 w-8 text-main-yellow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
        </svg>
        </a>
      </div>

      <div class="icono">
        <a href="/employer/perfil">
        <svg class="h-8 w-8 text-main-yellow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
        </svg>
        </a>
      </div>
      {{-- <div class="icono">
      <svg class="h-8 w-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
      </div> --}}
    </footer>
  </div>
{{--   </div> --}}
@livewireScripts
</body>
</html>
