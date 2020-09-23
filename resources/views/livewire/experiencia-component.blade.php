<div>

  @if (session()->has('message-experiencia'))

    <div class=" success--alert bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-4 shadow-md" role="alert">
      <div class="flex">
        <div class="py-1">
          <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg>
        </div>
        <div>
          <p class="font-bold">{{ session("message-experiencia") }}</p>
          <p class="text-sm">puedes cerrar la ventana.</p>
        </div>
      </div>
    </div>

  @endif

  <form wire:submit.prevent="createTrabajo">

    <!-- Empresa -->
    <div class="trabajo--empresa mx-4 mb-4">
      <p class="text-sm font-thin mb-1">Empresa</p>
      <input
        wire:model.debounce.500ms="empresa"
        type="text"
        name="empresa"
        class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1"
        placeholder="La empresa para la que prestaste tus servicios">
      </input>
      @error('empresa')
        <p class="text-red-500 text-sm italic mt-4">
          {{ $message }}
        </p>
      @enderror
    </div>

    <!-- Puesto o actividad -->
    <div class="trabajo--puesto mx-4 mb-4">
      <p class="text-sm font-thin mb-1">Puesto o actividad</p>
      <input
        wire:model.debounce.500ms="puesto"
          type="text"
          name="puesto"
          class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1"
          placeholder="Puesto o atividad principal">
      </input>
      @error('puesto')
        <p class="text-red-500 text-sm italic mt-4">
          {{ $message }}
        </p>
      @enderror
    </div>

    <!-- Periodo -->
    <div class=" flex justify-start ">
      <div class="trabajo--periodo mx-4  mb-4 w-1/2">
        <p class="text-sm font-thin mb-1">Periodo</p>
        <input
          wire:model.debounce.500ms="periodo"
          type="text"
          name="periodo"
          class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1"
          placeholder="El perdiodo en el que estviste en la empresa">
        </input>
        @error('periodo')
          <p class="text-red-500 text-sm italic mt-4">
            {{ $message }}
          </p>
        @enderror
      </div>
    </div>
    <div class="ml-4 mt-4">
      <button
        type="submit"
        class="btn text-sm text-white font-medium bg-green-500 shadow-lg rounded-lg px-4 py-3  mr-4"
        x-on:click="experiencia = false"
        wire:target="createTrabajo"
        wire:loading.attr="disabled"
        wire:loading.class="bg-green-400"
        wire:loading.class.remove="bg-green-500"
      >
        <svg wire:target="createTrabajo" wire:loading class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" display="block"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dbd3d5"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"/></rect><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dbd3d5" transform="rotate(30 50 50)"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"/></rect><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dbd3d5" transform="rotate(60 50 50)"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"/></rect><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dbd3d5" transform="rotate(90 50 50)"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"/></rect><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dbd3d5" transform="rotate(120 50 50)"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"/></rect><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dbd3d5" transform="rotate(150 50 50)"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"/></rect><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dbd3d5" transform="rotate(180 50 50)"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"/></rect><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dbd3d5" transform="rotate(210 50 50)"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"/></rect><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dbd3d5" transform="rotate(240 50 50)"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"/></rect><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dbd3d5" transform="rotate(270 50 50)"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"/></rect><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dbd3d5" transform="rotate(300 50 50)"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"/></rect><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#dbd3d5" transform="rotate(330 50 50)"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"/></rect></svg>
        <span>Guardar</span>
      </button>
      <a
        wire:click="$refresh"
        class="btn text-sm text-white font-medium bg-red-500 shadow-lg rounded-lg px-4 py-3"
        x-on:click="experiencia = true"
      >
        Cerrar
      </a>
    </div>
  </form>
</div>
