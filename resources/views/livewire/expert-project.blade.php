<div>
    <h1>Habilidades</h1>

    <div class="profesion flex flex-col ml-4 mb-4">
        <div>
          <p class="text-sm font-thin inline mb-1 mr-2">categoria</p>          
        </div>

        <div x-data="tagsAdmin()" class="seleccion-profesion">
          <select wire:model="CategoriaId" class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mb-1" name="clasificacion" id="clasificacion" placeholder="Clasificación">
              <option value=" "> Selecciona una opcion  </option>
              @foreach ($categorias as $item)
                <option value=" {{ $item['id'] }}  "> {{ $item['nombre'] }}  </option>
              @endforeach
          </select>

           @isset($subcategorias)
              <select wire:model="subcategoriaId" class="focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mb-1" name="clasificacion_nivel2" id="clasificacion_nivel2" placeholder="Clasificación">
              <option value=" "> Selecciona una opcion  </option>
              @foreach ($subcategorias as $item)
                <option value=" {{ $item['id'] }}  "> {{ $item['name'] }}  </option>
              @endforeach
            </select>
          @endisset

          
          @isset($tags)
            <div class="mt-6">
                @foreach ($subcategoriaTags as $subcategoriaTag)
                    <span class="bg-teal-500 text-white habilidades--single inline-block ro rounded-full text-sm px-8 py-1 mb-4 border-gray-600 border-solid border-2">
                        {{ $subcategoriaTag->name }}
                    </span>
                @endforeach
            </div> 

            <div class="mt-6">
                @foreach ($tags as $tag)
                    <span wire:ignore id="tag{{ $tag->id }}" @click="togleTagClass(event)" wire:click="addTag({{ $tag->id }})" class=" habilidades--single inline-block ro rounded-full text-sm text-black px-8 py-1 mb-4 border-gray-600 border-solid border-2">
                        {{ $tag->name }}
                    </span>
                @endforeach
            </div>        
          @endisset
        </div>
    </div>

</div>
