<div>
  <form wire:submit.prevent="createCarrera">

    <div class="educacion--institucion mx-4 mb-4">
      <p class="text-sm font-thin mb-1">Institución</p>
      <input
        wire:model.debounce.500ms="escuela"
        type="text"
        name="universidad"
        class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1"
        placeholder="Instituto o escuela de la que egresaste">
      </input>
      @error('universidad')
        <p class="text-red-500 text-sm italic mt-4">
          {{ $message }}
        </p>
      @enderror
    </div>

    <div class="educacion--nivel mx-4 mb-4">
      <p class="text-sm font-thin mb-1">Título o carrera</p>
      <input
        wire:model.debounce.500ms="carrera"
          type="text"
          name="profesion"
          class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1"
          placeholder="Título o  profesión">
      </input>
      @error('profesion')
        <p class="text-red-500 text-sm italic mt-4">
          {{ $message }}
        </p>
      @enderror
    </div>

    <div class=" flex justify-start ">
      <div class="educacion--fecha mx-4  mb-4 w-1/2">
        <p class="text-sm font-thin mb-1">Año de terminación</p>
        <input
          wire:model.debounce.500ms="fecha_terminacion"
          type="text"
          name="aterminacion"
          class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1"
          placeholder="El año en que egresaste">
        </input>
        @error('aterminacion')
          <p class="text-red-500 text-sm italic mt-4">
            {{ $message }}
          </p>
        @enderror
      </div>

      <div class = " flex justify-start items-center w-1/2 ">
        <input wire:model.debounce.500ms="sigue_estudiando" class="check w-auto" type="checkbox" name="sigue_estudiando" value="1">
        <label for="sigue_estudiando" class="text-sm font-thin ml-2 mb-1">Aún sigo estudiando</label>
      </div>
      @error('sigue_estudiando')
        <p class="text-red-500 text-sm italic mt-4">
          {{ $message }}
        </p>
      @enderror
    </div>

    <div class="ml-4 mt-4">
      <button
        type="submit"
        class="btn text-sm text-white font-medium bg-green-500 shadow-lg rounded-lg px-4 py-3  mr-4"
        x-on:click="educacion = false"
      >
        Guardar
      </button>
      <a
        wire:click="$refresh"
        class="btn text-sm text-white font-medium bg-red-500 shadow-lg rounded-lg px-4 py-3"
        x-on:click="educacion = true"
      >
        Cerrar
      </a>
    </div>
  </form>
</div>
