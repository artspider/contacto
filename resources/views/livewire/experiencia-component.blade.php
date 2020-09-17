<div>
    <form wire:submit.prevent="createTrabajo">

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

      <div class="ml-4 mt-4">
        <button
          type="submit"
          class="btn text-sm text-white font-medium bg-green-500 shadow-lg rounded-lg px-4 py-3  mr-4"
          x-on:click="experiencia = false"
        >
          Guardar
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
