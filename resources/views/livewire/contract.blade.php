<div>

  @if (session()->has('message-contactCreated'))

    <div class=" success--alert bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-4 shadow-md" role="alert">
      <div class="flex">
        <div class="py-1">
          <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg>
        </div>
        <div>
          <p class="font-bold">{{ session("message-contactCreated") }}</p>
          <a href="/employer" class="text-sm">Haz clic aqui para regresar al home.</a>
        </div>
      </div>
    </div>

  @endif

  <buton class="backArrow btn fixed hidden xl:flex top-36 left-8 z-40" onclick="history.back()">
    <svg class=" fill-current h-6 w-6 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 12c0 6.627 5.373 12 12 12s12-5.373 12-12S18.627 0 12 0 0 5.373 0 12zm7.58 0l5.988-5.995 1.414 1.416L10.408 12l4.574 4.59-1.414 1.416L7.58 12z"/>
    </svg>
    <p class="hidden 2xl:flex ml-2 text-sm font-semibold" >Regresa al perfil del experto</p>
  </buton>

  <!-- Contrato Container -->
  <div class="profile__body bg-white shadow-lg block mt-0 md:mt-16 lg:mt-36 mx-auto">

    <!-- Header -->
    <div class="card__card--header  flex flex-col justify-center ">
      <h2 class="ml-4 text-3xl font-bold text-white">Contrato digital.</h2>
      <p class="ml-4 text-lg text-white">Permitenos recavar información sobre el proyecto que el experto desarrollará</p>
    </div>

    <!-- Body -->

      <div class="card__card--body m-4 flex flex-col">

        <div x-data="{ editTitulo: false }" class="inline-block relative">
          <!-- Titulo -->
          <p x-show="editTitulo === false" x-on:click="editTitulo = true" class="xl:text-2xl font-semibold hover:text-gray-500 cursor-pointer w-max-content">{{ $this->titulo }}</p>
          <input wire:model.lazy="titulo" x-show="editTitulo === true" x-on:click.away="editTitulo = false" x-on:keydown.esc="editTitulo = false"  type="text" class="block pl-2 w-3/4 h-12 rounded-lg mb-3 border-gray-600 border-solid border-2" placeholder="Escrbe el titulo del proyecto">
          @error('titulo')
            <p class="text-red-500 italic mb-2">
              {{ $message }}
            </p>
          @enderror
          <!-- Experto -->
          <p class="my-2 xl:text-lg inline-flex">Encargado a: <span class="mx-2 font-semibold">{{ $this->expert->nombre }} </span> | Fecha de entrega: </p>
          <!-- Fecha de entrega -->
          <input wire:model.lazy="fecha_entrega" type="date" id="start" name="plazo" value="2020-07-17" min="2020-01-01" required>
          @error('fecha_entrega')
            <p class="text-red-500 italic mb-2">
              {{ $message }}
            </p>
          @enderror
          <p class="absolute top-2 right-4">Status: <span class="text-red-700">Pendiente</span></p>
        </div>

        <hr class=" border-t-2 border-solid text-gray-400">
        <div x-data="{ editDescripcion: false }">
          <div class="flex items-center">
            <p class=" my-2 xl:text-xl font-semibold">Descripción:</p>
            <p  x-show="editDescripcion === true" class="ml-2 text-red-500 font-semibold">Presiona &lt;esc&gt; para terminar de editar</p>
          </div>
          <p
            x-show="editDescripcion === false"
            x-on:click="editDescripcion = true"
            class=" w-3/4 mb-4 hover:text-gray-500 cursor-pointer ">{{ $this->descripcion }}</p>
          <textarea wire:model.lazy="descripcion" x-show="editDescripcion === true" x-on:click.away="editDescripcion = false" x-on:keydown.escape="editDescripcion = false" class="block pl-2 w-3/4 h-40 rounded-lg mb-3 border-gray-600 border-solid border-2" placeholder="Escribe la descripción del proyecto">
          </textarea>
          @error('descripcion')
            <p class="text-red-500 italic mb-2">
              {{ $message }}
            </p>
          @enderror
        </div>

        <div class="botonera mb-4">
          <button wire:click="createOrder" class="btn p-4 rounded-md bg-green-700 text-white hover:bg-green-400">
            Enviar
          </button>

          <button onclick="history.back()" class="btn p-4 rounded-md bg-red-600 text-white hover:bg-red-400">
            Cancelar
          </button>
        </div>

      </div>


  </div>
</div>
