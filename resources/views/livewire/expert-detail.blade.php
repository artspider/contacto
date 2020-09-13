<div>
  <div class="body--container dbody mt-36 mx-auto">
    <div class="card mt-10 ">
      <!-- Header del perfil-->
      <div class="card__card--header relative flex align-middle">
        <div
          class="card__card--header__avatar absolute  h-36 ml-8 mt-16 w-1/3 "
        >
          <img
            class="profile--avatar  top-0 left-0 w-36 h-36 rounded-full  border-8 border-gray-200"
            src=  "{{asset('storage/' . $this->expert->url_image) }}"
            alt="avatar"
          />
        </div>
        <div
          class="card__card--header__bio flex flex-col justify-center  text-white ml-52 w-2/5"
        >
        <p class="text-3xl font-bold leading-8"> {{ $this->expert->nombre }} </p>
          <p class=" text-base font-semibold">
            {{ $this->expert->profesion}}
          </p>
          <div class="contactar flex justify-center w-1/2 text-sm mt-4 ">
            <p class="mr-4 ">
              <svg
                class=" fill-current text-white w-6 h-6 "
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
              >
                <path
                  d="M13.718 10.528c0 .792-.268 1.829-.684 2.642-1.009 1.98-3.063 1.967-3.063-.14 0-.786.27-1.799.687-2.58 1.021-1.925 3.06-1.624 3.06.078zM24 12c0 6.627-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0s12 5.373 12 12zm-5-1.194c0-3.246-2.631-5.601-6.256-5.601C7.777 5.205 5 8.354 5 12.278c0 3.672 2.467 6.517 7.024 6.517 2.52 0 4.124-.726 5.122-1.288l-.687-.991c-1.022.593-2.251 1.136-4.256 1.136-3.429 0-5.733-2.199-5.733-5.473 0-5.714 6.401-6.758 9.214-5.071 2.624 1.642 2.524 5.578.582 7.083-1.034.826-2.199.799-1.821-.756 0 0 1.212-4.489 1.354-4.975h-1.364l-.271.952c-.278-.785-.943-1.295-1.911-1.295-2.018 0-3.722 2.19-3.722 4.783 0 1.73.913 2.804 2.38 2.804 1.283 0 1.95-.726 2.364-1.373-.3 2.898 5.725 1.557 5.725-3.525z"
                />
              </svg>
            </p>
            <p class="mr-4 ">
              <svg
                class=" fill-current text-white w-6 h-6 "
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
              >
                <path
                  d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm3.445 17.827c-3.684 1.684-9.401-9.43-5.8-11.308L10.698 6l1.746 3.409-1.042.513c-1.095.587 1.185 5.04 2.305 4.497l1.032-.505 1.76 3.397-1.054.516z"
                />
              </svg>
            </p>
            <p class="mr-4 ">
              <svg
                class=" fill-current text-white w-6 h-6 "
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
              >
                <path
                  d="M12 .02c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zM18.99 7L12 12.666 5.009 7H18.99zM19 17H5V8.495l7 5.673 7-5.672V17z"
                />
              </svg>
            </p>
          </div>
        </div>
        <div
          class="card__card--hireme w-2/5 flex justify-end items-center xl:mr-10 2xl:mr-8"
        >
          <button
            class="btn text-black font-semibold rounded-lg bg-main-yellow p-4"
          >
            Contratame
          </button>
        </div>
      </div>

      <!-- Body del perfil -->
      <div class="card__card--body flex flex-wrap justify-between items-start">
        <div class="card__card--body__col1 bg-white mt-14 mr-2">
          <!-- Contacto -->
          <div class="contacto rounded-md shadow-lg p-6">
            <div class="contacto__top flex items-center text-gray-700 ">
              <svg
                class=" fill-current h-10 w-10 mr-4"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
              >
                <path
                  d="M22 5v14H2V5h20zm2-2H0v18h24V3zM14 16.597V17H4v-.417c-.004-1.112.044-1.747 1.324-2.043 1.403-.324 2.787-.613 2.122-1.841C5.473 9.062 6.883 7 9 7c2.077 0 3.521 1.985 1.556 5.699-.647 1.22.688 1.51 2.121 1.841 1.284.297 1.328.936 1.323 2.057zM20 7h-4v2h4V7zm0 4h-4v2h4v-2zm0 4h-4v2h4v-2z"
                />
              </svg>
              <p class="text-2xl font-semibold tracking-wider">Contacto</p>
            </div>
            <div class="contacto__body mt-6">
              <div class="contacto__body__email flex items-center">
                <svg
                  class="fill-content text-gray-600 h-5 w-5 mr-2"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M12.042 23.648C4.229 23.648 0 18.772 0 12.477 0 5.75 4.762.352 13.276.352 19.49.352 24 4.39 24 9.953c0 8.712-10.33 11.012-9.812 6.042-.71 1.108-1.854 2.354-4.053 2.354-2.516 0-4.08-1.842-4.08-4.807 0-4.444 2.921-8.199 6.379-8.199 1.659 0 2.8.876 3.277 2.221l.464-1.632h2.338c-.244.832-2.321 8.527-2.321 8.527-.648 2.666 1.35 2.713 3.122 1.297 3.329-2.58 3.501-9.327-.998-12.141C13.495.724 2.521 2.513 2.521 12.308c0 5.611 3.95 9.381 9.829 9.381 3.436 0 5.542-.93 7.295-1.948l1.177 1.698c-1.711.966-4.461 2.209-8.78 2.209zM9.698 9.343c-.715 1.34-1.177 3.076-1.177 4.424 0 3.61 3.522 3.633 5.252.239.712-1.394 1.171-3.171 1.171-4.529 0-2.917-3.495-3.434-5.246-.134z"
                  />
                </svg>
                <p>{{ $this->expert->email }}</p>
              </div>
              <div class="contacto__body__telefono flex items-center mt-4">
                <svg
                  class="fill-content text-gray-600 h-5 w-5 mr-2"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M18.48 22.926l-1.193.658C10.308 27.205-1.795 6.09 5.008 2.1l1.145-.637L9.867 7.93l-1.139.632c-2.067 1.245 2.76 9.707 4.879 8.545l1.162-.642 3.711 6.461zM8.672 0l-1.68.975 3.714 6.466 1.681-.975L8.672 0zm8.613 14.997l-1.68.975 3.714 6.467L21 21.464l-3.715-6.467z"
                  />
                </svg>
                <p>{{ $this->expert->telefono }}</p>
              </div>
              <div class="contacto__body__telefono flex items-center mt-4">
                <svg
                  class="fill-content text-gray-600 h-5 w-5 mr-2"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M21 13v10h-6v-6H9v6H3V13H0L12 1l12 12h-3zm-1-5.907V2h-3v2.093l3 3z"
                  />
                </svg>
                <p> {{ $this->expert->ciudad }} , {{ $this->expert->estado }}.</p>
              </div>
            </div>
          </div>

          <!-- habilidades -->
          <div class="skils rounded-md shadow-lg p-6">
            <div class="skills__top flex items-center text-gray-700 ">
              <svg class=" fill-current h-8 w-8 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M23.27 19.743L11.324 7.798c-.557-.557-.842-1.331-.783-2.115.115-1.485-.395-3.009-1.529-4.146C7.982.509 6.637 0 5.289 0c-.507 0-1.015.072-1.506.216l3.17 3.17c.344 1.589-1.959 3.918-3.566 3.567l-3.17-3.17C.072 4.275 0 4.783 0 5.292c0 1.347.51 2.691 1.537 3.721 1.135 1.136 2.66 1.646 4.146 1.53.783-.06 1.557.226 2.113.783L19.743 23.27c.468.468 1.103.73 1.763.73C22.874 24 24 22.892 24 21.506c0-.638-.244-1.276-.73-1.763zM21.5 22.5c-.553 0-1-.448-1-1s.447-1 1-1 1 .448 1 1-.447 1-1 1zM13.125 6.747L19.848 0 24 4.128l-6.722 6.771-1.012-1.012 5.488-5.533c.165-.165.165-.435-.001-.602-.166-.165-.436-.165-.601 0l-5.489 5.533-.935-.936 5.495-5.539c.166-.166.166-.437 0-.603-.168-.166-.436-.166-.603.001l-5.494 5.539-1.001-1zm-3.187 9.521l-5.308 5.35c-.166.166-.437.166-.603 0-.165-.166-.166-.436 0-.602l5.308-5.351-.936-.935-5.301 5.343c-.165.168-.435.167-.601.001-.166-.167-.166-.436 0-.602l5.3-5.343-1.004-1.004-5.745 5.787L0 24l5.203-.937 5.743-5.786-1.008-1.009z"/>
              </svg>
              <p class="text-2xl font-semibold tracking-wider">Habilidades</p>
            </div>

            <div class="skills__body mt-6">
              <ul class=" list-disc list-inside text-gray-700 tracking-wider leading-loose ">

                @empty($habilidades)
                    <p>No has añadido ninguna habilidad</p>
                @endempty
                @if(!empty($habilidades))
                    @foreach ($habilidades as $habilidad)

                        <li> {{ $habilidad->name }} </li>

                    @endforeach
                @endif

              </ul>
            </div>
          </div>

          <!-- Educacion -->
          <div class="educacion rounded-md shadow-lg p-6">
            <div class="educacion__top flex items-center text-gray-700 ">
              <svg class=" fill-current h-10 w-10 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M20 12.875v5.068C20 20.697 14.211 22 11 22c-3.052 0-9-1.392-9-4.057v-6.294l9 4.863 9-3.637zM11.917 2L-1 7.75l12 6.5 11-4.417V17h2V8.75L11.917 2zM25 22h-4c.578-1 1-2.5 1-4h2c0 1.516.391 2.859 1 4z"/>
              </svg>
              <p class="text-2xl font-semibold tracking-wider">Educación</p>
            </div>

            <div class="educacion__body mt-6 ml-6">

                @empty($educacion)
                    <p>No has añadido ninguna escuela</p>
                @endempty
                @if(!empty($educacion))
                    @foreach ($educacion as $item)
                        <div class="mb-4">
                            <p class="font-semibold text-gray-800 "> {{ $item->escuela }}</p>
                            <p class="text-sm text-gray-600"> {{ $item->carrera }} </p>
                            <p class="text-sm text-gray-600">{{ $item->fecha_terminacion }}</p>
                        </div>
                    @endforeach
                @endif


            </div>
          </div>

        </div>

        <div class="card__card--body__col2 bg-white mt-14 ml-2">
          <!-- About -->
          <div class="about rounded-md shadow-lg p-6">
            <div class="about__top flex items-center text-gray-700 ">
              <svg
                class=" fill-current h-10 w-10 mr-4"
                xmlns="http://www.w3.org/2000/svg"
                fill-rule="evenodd"
                clip-rule="evenodd"
                viewBox="0 0 24 24"
              >
                <path
                  d="M7 16.488l1.526-.723c1.792-.81 2.851-.344 4.349.232 1.716.661 2.365.883 3.077 1.164 1.278.506.688 2.177-.592 1.838-.778-.206-2.812-.795-3.38-.931-.64-.154-.93.602-.323.818 1.106.393 2.663.79 3.494 1.007.831.218 1.295-.145 1.881-.611.906-.72 2.968-2.909 2.968-2.909.842-.799 1.991-.135 1.991.72 0 .23-.083.474-.276.707-2.328 2.793-3.06 3.642-4.568 5.226-.623.655-1.342.974-2.204.974-.442 0-.922-.084-1.443-.25-1.825-.581-4.172-1.313-6.5-1.6v-5.662zm-1 6.538H2v-8h4v8zm1-7.869v-1.714c-.006-1.557.062-2.447 1.854-2.861 1.963-.453 4.315-.859 3.384-2.577C9.477 2.913 11.451.026 14.415.026c2.907 0 4.93 2.78 2.177 7.979-.904 1.708 1.378 2.114 3.384 2.577 1.799.415 1.859 1.311 1.853 2.879 0 .13-.011 1.171 0 1.665-.483-.309-1.442-.552-2.187.106-.535.472-.568.504-1.783 1.629-1.75-.831-4.456-1.883-6.214-2.478-.896-.304-2.04-.308-2.962.075L7 15.157z"
                />
              </svg>
              <p class="text-2xl font-semibold tracking-wider">Acerca de mi</p>
            </div>
            <div class="about__body mt-6">
              <div class="about__body__habilidades text-gray-700">
                <p>
                  {{ $this->expert->habilidades }}
                </p>
                <div class="about__body__fechanac flex items-center mt-4">
                  <p class="text-gray-700">
                    <span class=" text-black font-semibold"
                      >Fecha de nacimiento:</span
                    >
                    17 de Julio de 1975
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Experincia -->
          <div class="experiencia rounded-md shadow-lg p-6">
            <div class="experiencia__top flex items-center text-gray-700 ">
              <svg class=" fill-current h-10 w-10 mr-4" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24">
                <path d="M9.484 15.696L8.773 15l-2.552 2.607-1.539-1.452-.698.709L6.234 19l3.25-3.304zm0-5L8.773 10l-2.552 2.607-1.539-1.452-.698.709L6.234 14l3.25-3.304zm0-5L8.773 5 6.221 7.607 4.682 6.155l-.698.709L6.234 9l3.25-3.304zM20 17h-8v1h8v-1zm0-5h-8v1h8v-1zm0-5h-8v1h8V7zm4-5H0v20h24V2zm-1 19H1V3h22v18z"/>
              </svg>
              <p class="text-2xl font-semibold tracking-wider">Experiencia</p>
            </div>

            <div class="experiencia__body mt-6 ml-6">
              <ul class=" list-disc text-gray-700 tracking-wider leading-loose ">
                <li>Técnico de planta externa. Telmex</li>
                <li>Docente en Tecnológico de Iguala</li>
                <li>Programador Junior en CorreoWeb</li>
                <li>Cableado estructurado en BestWestern Hotel</li>
                <li>Configuración de Red en BestWestern Hotel</li>
                <li>Manteniiento aplicación Hospitality Opera Oracle en BestWestern hotel</li>
              </ul>
            </div>
          </div>

          <!-- Redes Sociales -->
          <div class="redes rounded-md shadow-lg p-6">
            <div class="redes__top flex items-center text-gray-700 ">
              <svg class=" fill-current h-10 w-10 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M5 7c2.761 0 5 2.239 5 5s-2.239 5-5 5-5-2.239-5-5 2.239-5 5-5zm11.122 12.065c-.073.301-.122.611-.122.935 0 2.209 1.791 4 4 4s4-1.791 4-4-1.791-4-4-4c-1.165 0-2.204.506-2.935 1.301l-5.488-2.927c-.23.636-.549 1.229-.943 1.764l5.488 2.927zM24 4c0-2.209-1.791-4-4-4s-4 1.791-4 4c0 .324.049.634.122.935l-5.488 2.927c.395.535.713 1.127.943 1.764l5.488-2.927C17.796 7.494 18.835 8 20 8c2.209 0 4-1.791 4-4z"/>
              </svg>
              <p class="text-2xl font-semibold tracking-wider">Redes sociales</p>
            </div>

            <div class="redes__body mt-6 ml-6">
              <div class="flex mb-4">
                <svg class=" fill-current h-6 w-6 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10S2 17.514 2 12 6.486 2 12 2zm0-2C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm-2 10H8v2h2v6h3v-6h1.82l.18-2h-2v-.833c0-.478.096-.667.558-.667H15V6h-2.404C10.798 6 10 6.792 10 8.308V10z"/>
                </svg>
                <p class="text-gray-700">{{ $this->expert->facebook }}</p>
              </div>

              <div class="flex mb-4">
                <svg class=" fill-current h-6 w-6 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162S8.597 18.163 12 18.163s6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zM12 16c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
                <p class="text-gray-700"> {{ $this->expert->instagram }} </p>
              </div>

              <div class="flex mb-4">
                <svg class=" fill-current h-6 w-6 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10S2 17.514 2 12 6.486 2 12 2zm0-2C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm6.5 8.778c-.441.196-.916.328-1.414.388.509-.305.898-.787 1.083-1.362-.476.282-1.003.487-1.564.597-.448-.479-1.089-.778-1.796-.778-1.59 0-2.758 1.483-2.399 3.023-2.045-.103-3.86-1.083-5.074-2.572-.645 1.106-.334 2.554.762 3.287-.403-.013-.782-.124-1.114-.308-.027 1.14.791 2.207 1.975 2.445-.346.094-.726.116-1.112.042.313.978 1.224 1.689 2.3 1.709-1.037.812-2.34 1.175-3.647 1.021 1.09.699 2.383 1.106 3.773 1.106 4.572 0 7.154-3.861 6.998-7.324.482-.346.899-.78 1.229-1.274z"/>
                </svg>
                <p class="text-gray-700">{{ $this->expert->twitter }} </p>
              </div>


            </div>
          </div>

        </div>

        </div>
      </div>
    </div>
  </div>
</div>
