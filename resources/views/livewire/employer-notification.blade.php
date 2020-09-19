<div>
    <div class="saludos mt-20 mb-4 mx-4">
        <p class=" titulo font-bold mb-1"> {{ auth()->user()->name }}, </p>
        <p class=" subtitulo font-semibold text-gray-800 ">Estos son tus mensajes</p>
    </div>

      <div x-data="{ smodal: false }" class=" alerts dbody block  xl:w-4/5 xl:mx-auto ">

        @foreach ($notifications as $notification)
            <div class=" alerts--notification min bg-orange-100 border-l-4 border-orange-500 flex rounded-lg shadow-lg py-2">
                <div class="employer__date w-1/4 flex-shrink-0 flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400">
                    <svg class=" fill-current w-10 -h-10  " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 1C5.662 1 0 5.226 0 11.007c0 2.05.739 4.063 2.047 5.625.055 1.83-1.023 4.456-1.993 6.368 2.602-.47 6.301-1.508 7.978-2.536C17.268 22.711 24 17.059 24 11.007 24 5.195 18.299 1 12 1zm1 15h-2v-6h2v6zm-1-7.75c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z"/></svg>
                    <div class="date text-center text-black text-xl tracking-tighter mb-2"> {{ $notification->created_at->diffForHumans() }} </div>
                </div>
                <div class="notification w-full mx-4 flex flex-col">
                    <p class="text-lg font-bold">{{ $notification->data['expert_name'] }}</p>
                    <p class="text-sm mb-2">{{ $notification->data['expert_msg'] }}</p>
                    <div class="flex justify-end items-end flex-1">
                        <a wire:click="selectSender({{ $notification->data['expert_id'] }})" x-on:click="smodal=true" class="tooltip top btn mr-4 ">
                            <span class="tiptext text-xs text-red-500 font-semibold px-2">Responder</span>
                            <svg class=" fill-current h-6 w-6 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384"><path d="M149.333 117.333V32L0 181.333l149.333 149.333V243.2C256 243.2 330.667 277.333 384 352c-21.333-106.667-85.333-213.333-234.667-234.667z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

        @endforeach

        <div x-show="smodal" @click.away="smodal = false" class=" w-1/3 top-60 left-1/3 z-50 border-solid border-4 border-main-yellow fixed">
            <div class="modal--header bg-main-yellow pl-4 py-3">
            <p class="text-gray-700 font-bold text-lg">Respondiendo a {{ $expert_name }} </p>
            </div>
            <div class="modal--body bg-white w-full">
                <textarea wire:model="mensaje" class="modal--msj w-full p-4" placeholder="Escribe aqui tu mensaje..." id="modal--msj" name="modal--msj" rows="4" cols="50"></textarea>
            </div>
            <div class="modal--footer bg-gray-50 flex justify-end pr-4">
                <a wire:click="respondMessage" class="btn  text-white bg-gray-900 hover:bg-gray-700 rounded-lg px-4 py-2 my-3 "  href="">Enviar</a>
            </div>
        </div>

      </div>
</div>
