<div>



  <div class=" bg-purple-700 w-full ">
    <div class="search-box bg-purple-700 xl:w-4/5 2xl:w-3/5 xl:mx-auto pt-20 pb-10 ">
      <p class="saludo text-xl font-semibold text-red-step pt-12 mb-4">
        Hola {{ $nombre }}, ¿que perfil estas buscando hoy?
      </p>

      <form wire:submit.prevent="searchExpert(Object.fromEntries(new FormData($event.target)))">
      <div class="search-box--inputs ">
        <div class="search-que xl:w-2/5 xl:mr-6 ">
          <p class="text-white mb-2 ">Qué?</p>
          <div class="profile--block relative">
            <svg class="absolute mt-3 ml-2 w-6 h-6 fill-current text-gray-500" height="512" viewBox="0 0 515.558 515.558" width="512" xmlns="http://www.w3.org/2000/svg"><path d="M378.344 332.78c25.37-34.645 40.545-77.2 40.545-123.333C418.889 93.963 324.928.002 209.444.002S0 93.963 0 209.447s93.961 209.445 209.445 209.445c46.133 0 88.692-15.177 123.337-40.547l137.212 137.212 45.564-45.564L378.344 332.78zm-168.899 21.667c-79.958 0-145-65.042-145-145s65.042-145 145-145 145 65.042 145 145-65.043 145-145 145z"/></svg>
            <input name="tag"  class="block w-full h-12 rounded-lg mb-2 pl-10" id="search-container" type="text" placeholder="Profesión, habilidad o especialidad">
          </div>
        </div>
        <div class="donde xl:w-2/5 xl:mr-6">
          <p class="text-white mb-2">¿Dónde?</p>
          <div class="profile--block relative">
            <svg class="absolute mt-3 ml-2 w-6 h-6 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 0C156.748 0 76 80.748 76 180c0 33.534 9.289 66.26 26.869 94.652l142.885 230.257A15 15 0 00258.499 512h.119a14.997 14.997 0 0012.75-7.292L410.611 272.22C427.221 244.428 436 212.539 436 180 436 80.748 355.252 0 256 0zm128.866 256.818L258.272 468.186l-129.905-209.34C113.734 235.214 105.8 207.95 105.8 180c0-82.71 67.49-150.2 150.2-150.2S406.1 97.29 406.1 180c0 27.121-7.411 53.688-21.234 76.818z"/><path d="M256 90c-49.626 0-90 40.374-90 90 0 49.309 39.717 90 90 90 50.903 0 90-41.233 90-90 0-49.626-40.374-90-90-90zm0 150.2c-33.257 0-60.2-27.033-60.2-60.2 0-33.084 27.116-60.2 60.2-60.2s60.1 27.116 60.1 60.2c0 32.683-26.316 60.2-60.1 60.2z"/>
            </svg>
            <input  name="ciudad" class="block w-full h-12 rounded-lg mb-3 pl-10" type="text" placeholder="Ciudad o estado">
          </div>
        </div>
        <button class="btn btn--secondary w-full xl:h-12 xl:w-1/4 xl:mt-8 xl:py-0 font-bold rounded-lg px-4 py-4 mb-4">Buscar experto</button>
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

    <div class="resultados mt-8 ml-4">
      <p class="resultados__texto text-black font-semibold text-lg">Los mejores prospectos en cada busqueda...</p>
    </div>

    <div class="card--container " >

      @foreach ($experts as $item)

        <div wire:click="showExpert( {{ $item->id }})" class="expert--card bg-orange-100 border-l-4 border-orange-500 flex flex-col rounded-lg shadow-lg mx-4 my-4 py-2">
          <div class="expert--card__top flex ml-6 relative">
            <img class="expert__avatar w-20 h-20 2xl:w-32 2xl:h-36 rounded-full mt-6 " src="img/avatar1.png" alt="">
            <div class="expert--card__top-info ml-6 mr-6 mt-3 mb-2">
              <div class="stars flex items-center absolute top-0 right-0 mt-4 mr-6">
                <svg class="fill-current text-main-yellow w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.002 512.002"><path d="M511.267 197.258a14.995 14.995 0 00-12.107-10.209l-158.723-23.065-70.985-143.827a14.998 14.998 0 00-26.901 0l-70.988 143.827-158.72 23.065a14.998 14.998 0 00-8.312 25.585l114.848 111.954-27.108 158.083a14.999 14.999 0 0021.763 15.812l141.967-74.638 141.961 74.637a15 15 0 0021.766-15.813l-27.117-158.081 114.861-111.955a14.994 14.994 0 003.795-15.375z"/></svg>
                <span class="text-sm font-semibold">4.7</span>
              </div>
              <p class="nombre text-lg font-bold"> {{ $item->users->name }} </p>
              <p class="especialidad font-semibold text-base"> {{ $item->profesion }}</p>
            <p class="cedula font-semibold text-sm"> {{ $item->cedula }}</p>

            <div class="tags flex flex-wrap mt-4 ">
              @foreach ($item->tags as $tag)
                <div class=" text-white text-sm text-center bg-gray-700 rounded-full px-6 py-1 ml-1 mb-1">{{$tag->name}} </div>
              @endforeach
            </div>
            </div>
          </div>
          <div class="expert--card__bottom mx-6 ">
            <p class="habilidades text-justify ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, dicta amet? Blanditiis deleniti aspernatur magni.</p>
            <button class="btn btn--secondary w-full font-bold rounded-lg px-4 py-4 my-2">Contactar</button>
          </div>
        </div>
      @endforeach
    </div>

  </div>





</div>
