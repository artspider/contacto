<div>

  @if (session()->has('message-contractUpdated'))

    <div class=" success--alert bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-4 shadow-md" role="alert">
      <div class="flex">
        <div class="py-1">
          <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg>
        </div>
        <div>
          <p class="font-bold">{{ session("message-contractUpdated") }}</p>
          <a href="/expert" class="text-sm">Haz clic aqui para regresar al home.</a>
        </div>
      </div>
    </div>

  @endif

  <buton class="backArrow btn fixed hidden xl:flex top-36 left-8 z-40" onclick="history.back()">
    <svg class=" fill-current h-6 w-6 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 12c0 6.627 5.373 12 12 12s12-5.373 12-12S18.627 0 12 0 0 5.373 0 12zm7.58 0l5.988-5.995 1.414 1.416L10.408 12l4.574 4.59-1.414 1.416L7.58 12z"/>
    </svg>
    <p class="hidden 2xl:flex ml-2 text-sm font-semibold" >Regresa a tu Teblero</p>
  </buton>

  <!-- Contrato Container -->
  <div class="profile__body bg-white shadow-lg block mt-0 md:mt-16 lg:mt-36 mx-auto">

    <!-- Header -->
    <div class="card__card--header  flex flex-col justify-center ">
      <h2 class="ml-6 text-3xl font-bold text-white">Contrato digital.</h2>
      <p class="ml-6 text-lg text-white w-3/4">Esta es la información del contrato, si estas de acuerdo haz clic en aceptar.
        De lo contrario ponte en contacto con el empleador y solicita los cambios necesarios</p>
    </div>

    <!-- Body -->

      <div class="card__card--body mx-6 my-4 flex flex-col">

        <div class="inline-block relative">
          <!-- Titulo -->
          <p class="xl:text-2xl font-semibold w-max-content">{{ $this->order->titulo }}</p>

          <!-- Empleador -->
          <p class="my-2 xl:text-lg inline-flex">Solicitado por: <span class="mx-2 font-semibold">{{ $this->employer->nombre }} </span> | Fecha de entrega: <span class="mx-2 font-semibold"> {{ $this->order->fecha_entrega }} </span></p>

          <p class="absolute top-2 right-4">Status: <span class="text-red-700"> {{ $this->order->status_name }} </span></p>
        </div>

        <hr class=" border-t-2 border-solid text-gray-400">
        <div>
          <div class="flex items-center">
            <p class=" my-2 xl:text-xl font-semibold">Descripción:</p>
          </div>
          <p class="text-lg w-full mb-4 text-justify ">{{ $this->order->descripcion }}</p>
        </div>

        <div class="botonera mb-4">
          <button wire:click="acceptOrder" class="btn p-4 rounded-md bg-green-700 text-white hover:bg-green-400">
            Aceptar
          </button>

          <button onclick="history.back()" class="btn p-4 rounded-md bg-red-600 text-white hover:bg-red-400">
            Cancelar
          </button>
        </div>

      </div>


  </div>
</div>

