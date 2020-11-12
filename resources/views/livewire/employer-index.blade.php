<div>

  <!-- Header -->
  <div class="employer-bg w-full flex justify-center items-center ">
    <div class=" rounded-lg shadow-md bg-white xl:w-4/5 2xl:w-1/2 xl:mx-auto p-6 " >
      <p class=" text-xl font-semibold">
        Hola {{ $nombre }}, ¿que perfil estas buscando hoy?
      </p>

      <form wire:submit.prevent="searchExpert(Object.fromEntries(new FormData($event.target)))">
        <div class="search-box--inputs mt-4 ">
          <div class="search-que xl:w-2/5 xl:mr-6 ">
            <p class="text-black text-md font-semibold">Perfil</p>
            <div class="profile--block rounded-lg border-gray-400 border-solid border-2 relative">
              <!-- <svg class="absolute mt-3 ml-2 w-6 h-6 fill-current text-gray-500" height="512" viewBox="0 0 515.558 515.558" width="512" xmlns="http://www.w3.org/2000/svg"><path d="M378.344 332.78c25.37-34.645 40.545-77.2 40.545-123.333C418.889 93.963 324.928.002 209.444.002S0 93.963 0 209.447s93.961 209.445 209.445 209.445c46.133 0 88.692-15.177 123.337-40.547l137.212 137.212 45.564-45.564L378.344 332.78zm-168.899 21.667c-79.958 0-145-65.042-145-145s65.042-145 145-145 145 65.042 145 145-65.043 145-145 145z"/></svg> -->
              <svg class="absolute mt-3 ml-2 w-6 h-6 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M3.44 2l-.439-2h17.994l-.439 2H3.44zM2 5l-.439-2H22.44L22 5H2zm10.099 10.716l.004.283H6.164l-.048-.292c-.133-.779-.177-1.224.582-1.43.842-.227 1.684-.429 1.168-1.289-1.627-2.546-.849-3.99.634-3.99 1.454 0 2.516 1.39 1.355 3.99-.348.854.5 1.056 1.401 1.289.801.208.834.655.843 1.439zM18.727 11h-4.784l-.028 1h4.675l.137-1zM19 9h-5l-.028.999h4.892L19 9zm-.548 4h-4.566l-.029.999h4.459l.136-.999zm-.273 2h-4.351l-.028.999h4.241l.138-.999zM24 18H0l2 6h20l2-6zM3.375 16L2.29 7.999h19.411L20.582 16h2.021L24 6H0l1.356 10h2.019z"/>
              </svg>
              <input name="tag"  class="block w-full h-12 rounded-lg mb-2 pl-10" id="search-container" type="text" placeholder="Profesión, habilidad o especialidad">
            </div>
          </div>
          <div class="donde xl:w-2/5 xl:mr-6">
            <p class="text-black text-md font-semibold">Ciudad</p>
            <div class="profile--block rounded-lg border-gray-400 border-solid border-2 relative">
              <!-- <svg class="absolute mt-3 ml-2 w-6 h-6 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 0C156.748 0 76 80.748 76 180c0 33.534 9.289 66.26 26.869 94.652l142.885 230.257A15 15 0 00258.499 512h.119a14.997 14.997 0 0012.75-7.292L410.611 272.22C427.221 244.428 436 212.539 436 180 436 80.748 355.252 0 256 0zm128.866 256.818L258.272 468.186l-129.905-209.34C113.734 235.214 105.8 207.95 105.8 180c0-82.71 67.49-150.2 150.2-150.2S406.1 97.29 406.1 180c0 27.121-7.411 53.688-21.234 76.818z"/><path d="M256 90c-49.626 0-90 40.374-90 90 0 49.309 39.717 90 90 90 50.903 0 90-41.233 90-90 0-49.626-40.374-90-90-90zm0 150.2c-33.257 0-60.2-27.033-60.2-60.2 0-33.084 27.116-60.2 60.2-60.2s60.1 27.116 60.1 60.2c0 32.683-26.316 60.2-60.1 60.2z"/>
              </svg> -->
              <svg class="absolute mt-3 ml-2 w-6 h-6 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm10 12c0 .685-.07 1.354-.202 2h-3.853c.121-1.283.129-2.621 0-4h3.853c.132.646.202 1.315.202 2zm-.841-4h-3.5c-.383-1.96-1.052-3.751-1.948-5.278 2.435.977 4.397 2.882 5.448 5.278zm-5.554 0H13V2.342c1.215 1.46 2.117 3.41 2.605 5.658zM11 2.342V8H8.395C8.883 5.752 9.785 3.802 11 2.342zM11 10v4H8.07c-.146-1.421-.146-2.577 0-4H11zm0 6v5.658c-1.215-1.46-2.117-3.41-2.605-5.658H11zm2 5.658V16h2.605c-.488 2.248-1.39 4.198-2.605 5.658zM13 14v-4h2.93c.146 1.421.146 2.577 0 4H13zM8.289 2.722C7.393 4.249 6.724 6.04 6.341 8h-3.5c1.051-2.396 3.013-4.301 5.448-5.278zM2.202 10h3.853c-.121 1.283-.129 2.621 0 4H2.202C2.07 13.354 2 12.685 2 12s.07-1.354.202-2zm.639 6h3.5c.383 1.96 1.052 3.751 1.948 5.278-2.435-.977-4.397-2.882-5.448-5.278zm12.87 5.278c.896-1.527 1.565-3.318 1.948-5.278h3.5c-1.051 2.396-3.013 4.301-5.448 5.278z"/>
              </svg>
              <input  name="ciudad" class="block w-full h-12 rounded-lg mb-2 pl-10" type="text" placeholder="Culaquier lugar">
            </div>
          </div>
          <button class="btn btn--secondary w-full mt-4 h-15 xl:w-36 xl:mt-6  font-bold rounded-lg flex justify-center items-center">
          <svg class="w-6 h-6 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M9.145 18.29C4.103 18.29 0 14.188 0 9.145S4.103 0 9.145 0s9.145 4.103 9.145 9.145-4.102 9.145-9.145 9.145zm0-15.167c-3.321 0-6.022 2.702-6.022 6.022s2.702 6.022 6.022 6.022 6.023-2.702 6.023-6.022-2.702-6.022-6.023-6.022zm9.263 12.443c-.817 1.176-1.852 2.188-3.046 2.981L20.814 24l3.014-3.013-5.42-5.421z"/>
            </svg>
          </button>
        </div>
      </form>
    </div>
  </div>

  @if (session()->has('message'))
    <div
      class=" container mx-auto bg-red-500 text-lg text-red-100 font-semibold p-6 mt-6"
    >
      <div class="alert alert-success">
        {{ session("message") }}
      </div>
    </div>
  @endif

  @if (session()->has('message-contactUpdate'))
    <div
    class=" container mx-auto bg-green-500 text-lg text-green-100 font-semibold p-6 mt-6"
    >
      <div class="alert alert-success">
        {{ session("message-contactUpdate") }}
      </div>
    </div>
  @endif

  <p class="text-red-500 text-xs italic mt-4">
    {{ session()->get('error') }}
  </p>

  <div class="body--container flex-grow dbody block xl:flex xl:flex-col xl:w-4/5 2xl:w-3/5 mx-auto ">



    @if ($show)
      @empty($experts)
        <h2 class="text-lg xl:text-2xl  text-black font-semibold ml-4 lg:ml-0 mt-8 mb-0">No se encontraron coincidencias</h2>
        <img class="w-1/2 mx-auto mt-4" src="./img/confused-cartoon-man-1.png"></img>
      @endempty

      @isset($experts)
        <div class="card--container " >

          @foreach ($experts as $item)
            <div wire:click="showExpert( {{ $item->id }})" class="expert--card bg-white border-l-4 border-orange-500 rounded-lg shadow-lg mx-4 my-4 py-2">
              <div class="profile-pic py-2">
                <img class="expert__avatar w-20 h-20 xl:w-24 xl:h-24 2xl:w-36 2xl:h-36 rounded-full m-auto lg:m-0" src="{{asset('storage/' . $item->url_image) }}" alt="">
              </div>
              <div class="name-tags flex flex-col lg:block justify-center items-center py-2">
                <p class="nombre text-lg font-bold"> {{ $item->nombre }} </p>
                <p class="especialidad font-semibold text-base"> {{ $item->profesion }}</p>
                <p class="cedula font-semibold text-sm"> {{ $item->cedula }}</p>
                <div class="tags flex flex-wrap justify-center lg:justify-start my-4 ">
                  @foreach ($item->tags as $tag)
                    <div class=" text-white text-sm text-center bg-gray-700 rounded-full shadow-sm px-5 py-1 mr-1 mb-1">
                      {{$tag->name}}
                    </div>
                  @endforeach
                </div>
              </div>
              <div class="about mx-4 my-2">
                <p class="habilidades text-justify leading-tight "> {{ \Illuminate\Support\Str::limit($item->habilidades, 265, '...')  }}</p>
              </div>
              <div class="btn-contactar mx-4 my-2">
                <button class="btn btn--secondary w-full font-bold rounded-lg px-4 py-6 ">Contactar</button>
              </div>

            </div>
          @endforeach

        </div>

      @endisset
    @else
      <div class="resultados mt-8">
        <p class="resultados__texto ml-4 lg:ml-0 text-lg lg:text-xl xl:text-2xl text-black font-semibold">Los mejores prospectos en cada busqueda...</p>
      </div>

    @endif

  </div>

</div>
