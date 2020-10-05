<div>
    <div class="saludos mb-4 mx-4">
        <p class=" titulo font-bold mb-1">Hola {{ auth()->user()->name }},</p>
        <p class=" subtitulo font-semibold text-gray-800 ">
          Bienvenido de vuelta a tu tablero
        </p>
      </div>

      <div class="ordenes dbody block xl:w-4/5 xl:mx-auto ">

        @foreach ($orders as $order)
          <div
            class="ordenes--notification bg-red-100 border-l-4 border-red-500 flex rounded-lg shadow-lg py-2"
          >
            <div
              class="orden__date w-1/4 flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400"
            >
              <p class=" font-semibold ">Orden {{ str_pad( $order->id, 5, '0', STR_PAD_LEFT) }}</p>
              <div class="date text-black text-xl tracking-tighter mb-2">
                <p>
                  <p class="text-gray-400">
                    {{ $order->day_name }}
                    <span class="text-black" >
                      {{ $order->day }}
                    </span>
                    {{ $order->month_name }}
                  </p>
                </p>
              </div>
            </div>

            <div wire:click="showContract( {{ $order->id }})" class="notification w-full mx-6">
              <p class="text-lg font-bold"> {{ $order->titulo }} </p>
              <p class="text-sm xl:text-base mb-4 mt-2">
                El cliente <span class="font-semibold italic "> {{ $order->employer->nombre }} </span> te ha contratado para {{ $order->description_short }}.
              </p>
              <p>Revisa los detalles del contrato haciendo clic aqui y responde lo mas pronto posible</p>
              <div class="flex justify-end">
                <p>Status: {{ $order->status_name }}</p>
              </div>
            </div>
          </div>

        @endforeach


    </div>
</div>
