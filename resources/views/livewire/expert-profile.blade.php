<div>
  <div class="profile--personalData mt-16 mb-8">
    <div class="profile--picture flex justify-center relative h-16 bg-black">
        <img class="profile--avatar rounded-full absolute mt-6 w-20 h-20 lg:w-40 lg:h-40" src=  "{{asset('storage/' . $foto_perfil) }}" >



    </div>
    <p
      class="profile--name text-black text-center font-bold text-2xl mt-12 lg:mt-36"
    >

      {{ $nombre }}
    </p>
    <p
      class="profile--carrera text-gray-700  text-sm lg:text-xl .font-light text-center"
    >
      {{$profesion}}
    </p>
    <p
      class="profile--especialidad text-gray-700 text-sm lg:text-xl .font-light text-center"
    >
      {{ $especialidad }}
    </p>
  </div>


   {{-- @if (session()->has('success_message'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">¡Atencion!</strong>
            <span class="block sm:inline">{{ session("success_message") }}.</span>
        </div>
   @endif --}}



  <p class="text-red-500 text-xs italic mt-4">
    {{ session()->get('error') }}
  </p>

  <div class="profile__body dbody block xl:w-3/5 2xl:w-1/2 xl:mx-auto">


  <!-- Personales About -->
  <div class="pfwrapper " x-data="{ about: true }" >
      <!-- Datos personales-->
      @if (session()->has('success_message'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">¡Atencion!</strong>
            <span class="block sm:inline">{{ session("success_message") }}.</span>
        </div>
      @endif
      <div class="profile--about--show bg-white rounded-lg shadow-lg " x-show="about" >
        <p class=" text-lg font-semibold py-4 pl-4">Quien soy y que aporto a un proyecto:</p>
        <p class="pl-4"> {{ $this->about }}</p>
        <div class="flex justify-end">
          <button class="btn" x-on:click="about = false" >
            <svg
              class=" w-4 h-5 "
              height="512"
              viewBox="0 0 488.471 488.471"
              width="512"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M288.674 62.363L351.035.002l137.362 137.361-62.361 62.361zM245.547 105.541L0 351.088V488.47h137.382L382.93 242.923z"
              />
            </svg>
          </button>
        </div>

      </div>

      <!-- Edicion de Datos personales-->
      <div class="profile--about--edit bg-white rounded-lg shadow-lg " x-show="!about" >


        @if (session()->has('message-aboutUpdate'))

            <div class=" success--alert bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-4 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1">
                        <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg>
                    </div>
                    <div>
                        <p class="font-bold">{{ session("message-aboutUpdate") }}</p>
                        <p class="text-sm">puedes cerrar la ventana.</p>
                    </div>
                </div>
            </div>

        @endif

        @if ($errors->any())
        <p class="text-red-500 text-xs italic mt-4">
            Errores
            {{ session()->get('error') }}
          </p>
        @endif


        <p class=" text-lg font-semibold py-4 pl-4">Datos personales:</p>
        <form wire:submit.prevent="aboutUpdate">
          <div class="Nombre flex flex-col ml-4 mb-4">
            <p class="text-sm font-thin mb-1">Nombre</p>
            <input
                wire:model.debounce.500ms="nombre"
                type="text"
                name="nombre"
                class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1"
                placeholder="Escribe tun nombre completo">
              </input>
              @error('nombre')
                <p class="text-red-500 text-sm italic mt-4">
                {{ $message }}
                </p>
              @enderror
          </div>

          <div class="profesion flex flex-col ml-4 mb-4">
            <p class="text-sm font-thin mb-1">Profesion</p>
            <input
                wire:model.debounce.500ms="profesion"
                type="text"
                name="profesion"
                class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1"
                placeholder="¿Cuál es tu profesión">
              </input>
              @error('profesion')
                <p class="text-red-500 text-sm italic mt-4">
                {{ $message }}
                </p>
              @enderror
          </div>

          <div class="especialidad flex flex-col ml-4 mb-4">
            <p class="text-sm font-thin mb-1">Especialidad</p>
            <input
                wire:model.debounce.500ms="especialidad"
                type="text"
                name="especialidad"
                class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1"
                placeholder="¿Cúal es tu especialidad?">
            </input>
              @error('especialidad')
                <p class="text-red-500 text-sm italic mt-4">
                {{ $message }}
                </p>
              @enderror
          </div>

          <div class="especialidad flex flex-col ml-4 mb-4">
            <p class="text-sm font-thin mb-1">Foto de perfil</p>
            <input
                class=" inputfile  "
                wire:model.debounce.500ms="foto_perfil"
                type="file"
                name= "{{asset('storage/' . $foto_perfil) }}"
                class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1"
                placeholder="Ingresa una imagen">
            </input>

              @error('foto_perfil')
                <p class="text-red-500 text-sm italic mt-4">
                {{ $message }}
                </p>
              @enderror
          </div>

          <div class="about flex flex-col ml-4 mb-8">
            <p class="text-sm font-thin mb-1">Cuentanos de ti y de lo que puedes aportar a un proyecto</p>

            <textarea wire:model="about" class=" about-edit resize-none border rounded focus:outline-none focus:shadow-outline "  id="about" name="about" rows="5" cols="40" >
            At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
            </textarea>
              @error('about')
                <p class="text-red-500 text-sm italic mt-4">
                {{ $message }}
                </p>
              @enderror
          </div>

          <div class="ml-4 mt-4">
            <button
              class="btn text-sm text-white font-medium bg-green-500 shadow-lg rounded-lg px-4 py-3 mr-3"
              x-on:click="about = false"
            >
              Guardar
          </button>
            <a
                wire:click="closeWindow"
              class="btn text-sm text-white font-medium bg-red-500 shadow-lg rounded-lg px-4 py-3"
              x-on:click="about = true"
            >
              Cerrar
            </a>
          </div>
        </form>

      </div>
  </div>

  <!-- Contacto -->
  <div class="pfwrapper " x-data="{ profile: true }" >
    <!-- Datos del contacto-->

    <div class="profile--contact--show bg-white rounded-lg shadow-lg " x-show="profile" >
      <p class=" text-lg font-semibold py-4 pl-4">Datos de contacto</p>

      <div class="profile--phone flex justify-start items-center text-blue-700 mb-2 ml-4">
        <svg
          class=" w-5 h-5 fill-current mr-4"
          height="512"
          viewBox="0 0 511.999 511.999"
          width="512"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M171.966 210.754c17.546-17.546 17.546-46.094 0-63.64l-61.707-61.707c-9.439-9.44-22.524-14.223-35.887-13.123-13.108 1.079-24.964 7.761-32.527 18.331a221.285 221.285 0 00-4.571 6.664l124.083 124.083zM426.592 401.74l-61.707-61.707c-17.544-17.544-46.094-17.546-63.64 0l-10.609 10.609L414.724 474.73a221.809 221.809 0 006.659-4.576c10.57-7.563 17.252-19.419 18.332-32.527 1.101-13.365-3.683-26.446-13.123-35.887zM248.213 374.426c-12.021 0-23.32-4.681-31.82-13.18l-65.64-65.64c-8.499-8.499-13.181-19.8-13.181-31.82 0-6.828 1.515-13.422 4.377-19.404L21.947 124.379C5.067 159.822-2.403 199.531.679 239.389c4.153 53.71 27.315 104.164 65.221 142.069l64.642 64.641c37.904 37.905 88.359 61.067 142.069 65.221 5.869.454 11.733.679 17.583.679 33.875 0 67.202-7.552 97.426-21.946L267.616 370.049c-5.981 2.863-12.575 4.377-19.403 4.377zM301.999 0c-8.284 0-15 6.716-15 15s6.716 15 15 15c99.252 0 180 80.748 180 180 0 8.284 6.716 15 15 15s15-6.716 15-15c0-115.794-94.206-210-210-210zM301.998 209.986l.001.014c0 8.284 6.716 15 15 15s15-6.716 15-15c0-16.542-13.458-30-30-30-8.284 0-15 6.709-15 14.993s6.715 14.993 14.999 14.993zM301.999 150c33.084 0 60 26.916 60 60 0 8.284 6.716 15 15 15s15-6.716 15-15c0-49.626-40.374-90-90-90-8.284 0-15 6.716-15 15s6.716 15 15 15z"
          />
          <path
            d="M301.999 60c-8.284 0-15 6.716-15 15s6.716 15 15 15c66.168 0 120 53.832 120 120 0 8.284 6.716 15 15 15s15-6.716 15-15c0-82.71-67.29-150-150-150z"
          />
        </svg>
        <p class="text-black ">{{ $telefono }}</p>
      </div>

      <div class="profile--email flex justify-start items-center text-blue-700 mb-2 ml-4">
        <svg
          class=" w-5 h-5 fill-current  mr-4"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 512 512"
        >
          <path
            d="M256 60c-57.897 0-105 47.103-105 105 0 35.943 18.126 69.015 48.487 88.467 31.003 19.863 69.06 21.974 104.426 5.703 7.525-3.462 10.82-12.37 7.357-19.896-3.462-7.525-12.369-10.82-19.896-7.358-25.86 11.898-53.454 10.545-75.703-3.709C193.961 214.298 181 190.669 181 165c0-41.355 33.645-75 75-75s75 33.645 75 75c0 8.271-6.729 15-15 15-7.558 0-14.618-5.732-14.998-14.772A17.33 17.33 0 01301 165c0-24.813-20.187-45-45-45s-45 20.187-45 45 20.187 45 45 45c11.516 0 22.031-4.353 29.999-11.494C293.966 205.648 304.483 210 316 210c24.813 0 45-20.187 45-45 0-57.897-47.103-105-105-105zm14.789 107.406C269.631 174.535 263.45 180 256 180c-8.271 0-15-6.729-15-15s6.729-15 15-15c7.691 0 14.04 5.82 14.895 13.285a15.014 15.014 0 00-.106 4.121z"
          />
          <path
            d="M480.999 196.976a15.101 15.101 0 00-4.393-10.583L421 130.787V15c0-8.284-6.716-15-15-15H106c-8.284 0-15 6.716-15 15v115.787l-55.606 55.606c-.052.052-.096.11-.147.163a15.066 15.066 0 00-4.246 10.42l-.001.029V467c0 24.845 20.216 45 45 45h360c24.839 0 45-20.207 45-45V197.005l-.001-.029zM421 173.213L444.787 197 421 220.787v-47.574zm-300-36.208V30h270v220.787L309.787 332H202.213L121 250.787V137.005zm-30 36.208v47.574L67.213 197 91 173.213zM61 460.787V233.213L174.787 347 61 460.787zM82.214 482l119.999-120h107.574l119.999 120H82.214zM451 460.787L337.213 347 451 233.213v227.574z"
          />
        </svg>

        <p class="text-black">{{ $email }}</p>
      </div>

      <div class="profile--address flex justify-start items-center text-blue-700 pb-4 ml-4">
        <svg
          class=" w-5 h-5 fill-current  mr-4"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 496.941 496.941"
        >
          <path
            d="M441.224 0h-345.6C79.059 0 65.506 13.553 65.506 30.118v48.188H33.129c-4.518 0-7.529 3.012-7.529 7.529v46.682c0 4.518 3.012 7.529 7.529 7.529h32.376v67.765H33.129c-4.518 0-7.529 3.012-7.529 7.529v46.682c0 4.518 3.012 7.529 7.529 7.529h32.376v67.765H33.129c-4.518 0-7.529 3.012-7.529 7.529v46.682c0 4.518 3.012 7.529 7.529 7.529h32.376v67.765c0 16.565 13.553 30.118 30.118 30.118h345.6c16.565 0 30.118-13.553 30.118-30.118V30.118C471.341 13.553 457.788 0 441.224 0zM40.659 124.988V93.365h64.753v31.624h-1.255l-63.498-.001zm0 129.506v-31.623h64.753v31.623H40.659zm0 129.506v-31.624h64.753V384H40.659zm132.517 97.882H95.624c-8.282 0-15.059-6.776-15.059-15.059v-67.765h32.376c4.518 0 7.529-3.012 7.529-7.529v-46.682c0-4.518-3.012-7.529-7.529-7.529H80.565v-67.765h32.376c4.518 0 7.529-3.012 7.529-7.529v-46.682c0-4.518-3.012-7.529-7.529-7.529H80.565v-67.765h32.376c4.518 0 7.529-3.012 7.529-7.529V85.835c0-4.518-3.012-7.529-7.529-7.529H80.565V30.118c0-8.282 6.776-15.059 15.059-15.059h77.553v466.823zm283.106-15.058c0 8.282-6.776 15.059-15.059 15.059H188.235V15.059h252.988c8.282 0 15.059 6.776 15.059 15.059v436.706z"
          />
          <path
            d="M323.765 207.812c27.859 0 50.447-22.588 50.447-50.447s-22.588-50.447-50.447-50.447-50.447 22.588-50.447 50.447 22.588 50.447 50.447 50.447zm0-85.836c19.576 0 35.388 15.812 35.388 35.388s-15.812 35.388-35.388 35.388-35.388-15.812-35.388-35.388 15.811-35.388 35.388-35.388zM352.376 213.082H294.4c-27.859 0-50.447 22.588-50.447 50.447v45.176c0 4.518 3.012 7.529 7.529 7.529h143.812c4.518 0 7.529-3.012 7.529-7.529v-45.176c.001-27.858-22.588-50.447-50.447-50.447zm35.389 88.094H259.012v-37.647c0-19.576 15.812-35.388 35.388-35.388h57.976c19.576 0 35.388 15.812 35.388 35.388v37.647zM395.294 337.318H251.482c-4.518 0-7.529 3.012-7.529 7.529s3.012 7.529 7.529 7.529h143.812c4.518 0 7.529-3.012 7.529-7.529s-3.011-7.529-7.529-7.529zM395.294 368.941H251.482c-4.518 0-7.529 3.012-7.529 7.529s3.012 7.529 7.529 7.529h143.812c4.518 0 7.529-3.012 7.529-7.529.001-3.764-3.011-7.529-7.529-7.529z"
          />
        </svg>

        <div class=" flex items-center justify-between w-full">
          <p class="text-black">{{ $ciudad }}, {{ $estado }}</p>
          <button class="btn" x-on:click="profile = false" >
            <svg
              class=" w-4 h-5 "
              height="512"
              viewBox="0 0 488.471 488.471"
              width="512"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M288.674 62.363L351.035.002l137.362 137.361-62.361 62.361zM245.547 105.541L0 351.088V488.47h137.382L382.93 242.923z"
              />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Edicion de los datos del contacto -->
    <div class="profile--contact--edit bg-white rounded-lg shadow-lg" x-show="!profile" >

      @if (session()->has('message-contactUpdate'))

      <div class=" success--alert bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-4 shadow-md" role="alert">
        <div class="flex">
            <div class="py-1">
              <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg>
            </div>
        <div>
            <p class="font-bold">{{ session("message-contactUpdate") }}</p>
            <p class="text-sm">puedes cerrar la ventana.</p>
        </div>
        </div>
      </div>

      @endif

      <p class=" text-lg font-semibold py-4 pl-4">Datos de contacto</p>

      <form wire:submit.prevent="contactUpdate">

        <div class="profile--phone Nombre flex flex-col ml-4 mb-4">

          <p class="text-sm font-thin mb-1">Teléfono</p>
          <input
            type = "text"
            class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4"
            name="telefono"
            wire:model.debounce.500ms="telefono"
          />
        </div>
        @error('telefono')
        <p class="text-red-500 text-sm italic mt-4">
          {{ $message }}
        </p>
        @enderror

          <div class="profile--ciudad Nombre flex flex-col ml-4 mb-4">
            <p class="text-sm font-thin mb-1">Ciudad</p>
            <input
              class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4"
              type="text"
              name="ciudad"
              wire:model.debounce.500ms="ciudad"
            />
          </div>
        @error('ciudad')
          <p class="text-red-500 text-sm italic ml-14 mb-1">
            {{ $message }}
          </p>
        @enderror

        <div class="profile--estado Nombre flex flex-col ml-4 mb-4">
          <p class="text-sm font-thin mb-1">Estado</p>
          <input
            class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4"
            type="text"
            name="estado"
            wire:model.lazy="estado"
            placeholder="Tu estado a 3 letras, p.e. Gro, Mor"
          />
        </div>
        @error('estado')
          <p class="text-red-500 text-sm italic mt-4">
            {{ $message }}
          </p>
        @enderror

        <div class="ml-12">
          <button
            type="submit"
            class="btn text-sm text-white font-medium bg-green-500 shadow-lg rounded-lg px-4 py-3  mr-4"
            x-on:click="profile = false"
          >
            Guardar
          </button>
          <a
            class="btn text-sm text-white font-medium bg-red-500 shadow-lg rounded-lg px-4 py-3"
            x-on:click="profile = true"
          >
            Cerrar
          </a>
        </div>
      </form>
      </div>

  </div>

  <!-- Habilidades  Tags -->
  <div class="pfwrapper " x-data="{ habilidades: true }" @click.away="habilidades = true">
      <div class="profile--habilidades--show bg-white rounded-lg shadow-lg" x-show="habilidades">
        <p class=" text-lg font-semibold my-4 ml-4">Habilidades</p>

        <div class="habilidades--group ml-4">
          @empty($habilidades)
            <p>No has añadido ninguna habilidad</p>
          @endempty
          @if(!empty($habilidades))
            @foreach ($habilidades as $habilidad)
              <span class=" habilidades--single inline-block ro rounded-full bg-gray-600 text-sm text-white px-8 py-1 mb-4">
                {{ $habilidad->name }}
              </span>
            @endforeach
          @endif

        </div>
        <div class="flex justify-end">
          <button class="btn" x-on:click="habilidades = false" >
            <svg
              class=" w-4 h-5 "
              height="512"
              viewBox="0 0 488.471 488.471"
              width="512"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M288.674 62.363L351.035.002l137.362 137.361-62.361 62.361zM245.547 105.541L0 351.088V488.47h137.382L382.93 242.923z"
              />
            </svg>
          </button>
        </div>
      </div>


      <div class="profile--habilidades--edit bg-white rounded-lg shadow-lg" x-show="!habilidades">
        <form wire:submit.prevent='addTags'>
        <p class=" text-lg font-semibold my-4 ml-4">Habilidades</p>

        <p class=" font-thin text-sm ml-4 mb-2" >Habilidad</p>

        <input
          wire:keydown.enter="addTags"
          wire:model.debounce.500ms="tags"
          type="text"
          name="tags"
          class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 ml-4 mr-6 mb-1"
          placeholder="ej: Redes, Bases de datos, Contabilidad, etc.">
        </input>
        <p class=" font-thin text-sm text-gray-400 ml-4 mb-2" >Agrega con coma o presiona 'enter'</p>

        <div class="habilidades--group ml-4 mb-4">
          @empty($habilidades)
            <p>No has añadido ninguna habilidad</p>
          @endempty
          @if(!empty($habilidades))
            @foreach ($habilidades as $habilidad)
              <span class=" habilidades--single inline-block rounded-full bg-gray-600 text-sm text-white px-8 py-1 mb-4">
                {{ $habilidad->name }}
              </span>
            @endforeach
          @endif
        </div>

        <div class="ml-4">
          <button
            type="submit"
            class="btn text-sm text-white font-medium bg-green-500 shadow-lg rounded-lg px-4 py-3  mr-4"
            x-on:click="habilidades = false"
          >
            Guardar
          </button>
          <a
            class="btn text-sm text-white font-medium bg-red-500 shadow-lg rounded-lg px-4 py-3"
            x-on:click="habilidades = true"
          >
            Cerrar
          </a>
        </div>
      </form>
      </div>
  </div>

  <!-- Educacion -->
  <div class="pfwrapper " x-data="{ educacion: true }" @click.away="educacion = true">
      <div class="profile--educacion--show bg-white rounded-lg shadow-lg" x-show="educacion">
        <div class="top--line flex justify-between items-center mx-4">
          <p class=" text-lg font-semibold py-4">Educación</p>
          <button class="btn" href="" x-on:click="educacion = false">
            <svg class="fill-current w-6 h-6" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm7 14h-5v5h-4v-5H5v-4h5V5h4v5h5v4z"/></svg>
          </button>
        </div>

        <div class="habilidades--group ml-4">
          @empty($educacion)
            <p>No has añadido ninguna escuela</p>
          @endempty
          @if(!empty($educacion))
            @foreach ($educacion as $item)
              <div class="educacion--institucion px-4 pb-1">
                {{ $item->escuela }}
              </div>
              <div class="educacion--nivel px-4 pb-1">
                {{ $item->carrera }}
              </div>
              <div class="educacion--fecha pl-4 pb-4">{{ $item->fecha_terminacion }}</div>
            @endforeach
          @endif
        </div>

      </div>


      <div class="profile--educacion--edit bg-white rounded-lg shadow-lg " x-show=" !educacion">
        <p class=" text-lg font-semibold my-4 ml-4">Educación</p>
        <livewire:educacion-component />
      </div>
  </div>

  <!-- Experiencia -->
  <div class="pfwrapper " x-data="{ experiencia: true }" >
    <div class="profile--experiencia--show bg-white rounded-lg shadow-lg" x-show="experiencia">
      <div class="top--line flex justify-between items-center mx-4">
        <p class=" text-lg font-semibold py-4">Experiencia</p>
        <button class="btn" href="" x-on:click="experiencia = false">
          <svg class="fill-current w-6 h-6" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm7 14h-5v5h-4v-5H5v-4h5V5h4v5h5v4z"/></svg>
        </button>
      </div>

      <div class="Experiencia--group ml-4">
        @empty($experiencia)
          <p>No has añadido ninguna trabajo</p>
        @endempty
        @if(!empty($experiencia))
          @foreach ($experiencia as $item)
            <div class="experiencia--institucion px-4 pb-1">
              {{ $item->empresa }}
            </div>
            <div class="educacion--nivel px-4 pb-1">
              {{ $item->puesto }}
            </div>
            <div class="educacion--fecha pl-4 pb-4">{{ $item->fecha }}</div>
          @endforeach
        @endif
      </div>

    </div>


    <div class="profile--experiencia--edit bg-white rounded-lg shadow-lg " x-show=" !experiencia">
      <p class=" text-lg font-semibold my-4 ml-4">Experiencia</p>
      <livewire:experiencia-component />
    </div>
</div>

  <!-- Redes Sociales -->
  <div class="pfwrapper" x-data="{ redes: true }" @click.away="redes = true">
    <div class="profile--redessociales--show bg-white rounded-lg shadow-lg mb-20" x-show="redes">
      <p class=" text-lg font-semibold py-4 pl-4">Redes sociales</p>

      <div class="facebook flex items-center ml-4 mb-4">
        <svg class=" fill-current h-7 w-7 text-blue-600 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm3 8h-1.35c-.538 0-.65.221-.65.778V10h2l-.209 2H13v7h-3v-7H8v-2h2V7.692C10 5.923 10.931 5 13.029 5H15v3z"/>
        </svg>
        <p class="facebook--link ml-4">
          {{$facebook}}
        </p>
      </div>

      <div class="facebook flex items-center ml-4 mb-4">
        <svg class=" fill-current h-7 w-7 text-blue-600 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm6.066 9.645c.183 4.04-2.83 8.544-8.164 8.544-1.622 0-3.131-.476-4.402-1.291 1.524.18 3.045-.244 4.252-1.189-1.256-.023-2.317-.854-2.684-1.995.451.086.895.061 1.298-.049-1.381-.278-2.335-1.522-2.304-2.853.388.215.83.344 1.301.359-1.279-.855-1.641-2.544-.889-3.835 1.416 1.738 3.533 2.881 5.92 3.001-.419-1.796.944-3.527 2.799-3.527.825 0 1.572.349 2.096.907.654-.128 1.27-.368 1.824-.697-.215.671-.67 1.233-1.263 1.589.581-.07 1.135-.224 1.649-.453-.384.578-.87 1.084-1.433 1.489z"/>
        </svg>
        <p class="twitter--link ml-4">
          {{$twitter}}
        </p>
      </div>

      <div class="facebook flex items-center ml-4 mb-4">
        <svg class=" fill-current h-7 w-7 text-blue-600 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path d="M17.833 6.595v1.476c0 .237-.193.429-.435.429h-1.465c-.238 0-.434-.192-.434-.429V6.595c0-.237.195-.428.434-.428h1.465c.242 0 .435.191.435.428zM12 14.093c1.121 0 2.028-.908 2.028-2.029s-.907-2.029-2.028-2.029-2.028.908-2.028 2.029.907 2.029 2.028 2.029zM24 12c0 6.627-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0s12 5.373 12 12zm-5-1.75h-3.953c.316.533.508 1.149.508 1.813 0 1.968-1.596 3.564-3.563 3.564-1.969 0-3.564-1.596-3.564-3.564 0-.665.191-1.281.509-1.813H5v5.996C5 17.767 6.27 19 7.791 19h8.454C17.766 19 19 17.767 19 16.246V10.25zm-7.009 4.559c1.515 0 2.745-1.232 2.745-2.746 0-.822-.364-1.56-.937-2.063a2.7642 2.7642 0 00-.677-.437 2.7322 2.7322 0 00-1.132-.245c-.405 0-.788.088-1.133.245-.246.112-.474.26-.675.437-.574.503-.938 1.242-.938 2.063.001 1.514 1.234 2.746 2.747 2.746zM19 7.754C19 6.233 17.766 5 16.245 5H9.083v2.917H8.5V5h-.583v2.917h-.584V5.045c-.202.033-.397.083-.583.157v2.715h-.583V5.524C5.465 6.024 5 6.834 5 7.754v1.913h4.359c.681-.748 1.633-1.167 2.632-1.167 1.004 0 1.954.422 2.631 1.167H19V7.754z"/>
        </svg>
        <p class="instagram--link ml-4">
          {{$instagram}}
        </p>
      </div>

      <div class="flex justify-end">
        <button class="btn" x-on:click="redes = false" >
          <svg
            class=" w-4 h-5 "
            height="512"
            viewBox="0 0 488.471 488.471"
            width="512"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M288.674 62.363L351.035.002l137.362 137.361-62.361 62.361zM245.547 105.541L0 351.088V488.47h137.382L382.93 242.923z"
            />
          </svg>
        </button>
      </div>

    </div>

    <div class="profile--redessociales-edit bg-white rounded-lg shadow-lg mb-20" x-show="!redes">

      @if (session()->has('message-redesUpdate'))
        <div
        class=" container mx-auto bg-green-500 text-lg text-green-100 font-semibold p-6 "
        >
          <div class="alert alert-success">
            {{ session("message-redesUpdate") }}
          </div>
        </div>
      @endif

      <p class=" text-lg font-semibold py-4 pl-4">Redes sociales</p>
      <form wire:submit.prevent="redesUpdate">

      <div class="facebook flex flex-col ml-4 mb-4">
        <p class="text-sm font-thin mb-1">Facebook</p>
        <input
            wire:model.debounce.500ms="facebook"
            type="text"
            name="facebook"
            class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1"
            placeholder="Escribe el enlace a tu perfil de facebook">
          </input>
          @error('facebook')
            <p class="text-red-500 text-sm italic mt-4">
            {{ $message }}
            </p>
          @enderror
      </div>

      <div class="twitter flex flex-col ml-4 mb-4">
        <p class="text-sm font-thin mb-1">Twitter</p>
        <input
            wire:model.debounce.500ms="twitter"
            type="text"
            name="twitter"
            class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1"
            placeholder="Escribe el enlace a tu perfil de twitter">
          </input>
          @error('twitter')
            <p class="text-red-500 text-sm italic mt-4">
            {{ $message }}
            </p>
          @enderror
      </div>

      <div class="instagram flex flex-col ml-4 mb-4">
        <p class="text-sm font-thin mb-1">Instagram</p>
        <input
            wire:model.debounce.500ms="instagram"
            type="text"
            name="instagram"
            class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1"
            placeholder="Escribe el enlace a tu perfil de instagram">
          </input>
          @error('instagram')
            <p class="text-red-500 text-sm italic mt-4">
            {{ $message }}
            </p>
          @enderror
      </div>

      <div class="ml-4 mt-4">
        <button
          class="btn text-sm text-white font-medium bg-green-500 shadow-lg rounded-lg px-4 py-3 mr-3"
          x-on:click="redes = false"
        >
          Guardar
        </button>
        <a
          class="btn text-sm text-white font-medium bg-red-500 shadow-lg rounded-lg px-4 py-3"
          x-on:click="redes = true"
        >
          Cerrar
        </a>
      </div>
    </form>

    </div>
  </div>



</div>
</div>


