<div>
    <div class="saludos  border-b-2 border-solid border-gray-300">
        <!-- <p class=" titulo font-bold mb-1"> {{ auth()->user()->name }}, </p> -->
        <div class="flex items-center">
            <svg class=" w-8 h-8 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M18.546 3H5.477L0 11.986V21h24v-9.014L18.546 3zM6.6 5h10.82l3.642 6h-4.476l-3 3h-3.172l-3-3H2.943L6.6 5zM22 19H2v-6h4.586l3 3h4.828l3-3H22v6z"/>
            </svg>
            <p class=" subtitulo ml-4 font-semibold text-gray-800 ">Estos son tus mensajes</p>
        </div>
        <p class="text-gray-500 text-lg ">Estas son las propuestas de los empleadores</p>
    </div>

    <div x-data="{ smodal: false }" class=" alerts dbody block  xl:w-4/5 xl:mx-auto ">

        @foreach ($notifications as $notification)
        <div class=" alerts--notification min  border-l-4 border-main-yellow flex rounded-lg shadow-lg py-2">
                
                <div class="notification w-full mx-4 flex flex-col justify-between">
                    
                    
                    <div class=" flex items-center mb-4 ">
                        <img class="employer__avatar w-8 h-8 xl:w-10 xl:h-10 2xl:w-14 2xl:h-14 rounded-full m-auto lg:m-0" src="{{asset('storage/' . $notification->data['employer_picture']) }}" alt="">
                        <p class="text-lg font-bold ml-4">{{ $notification->data['employer_name'] }}, escribió:</p>
                    </div>               
                    <p class="text-base mb-2 ">{{ $notification->data['employer_msg'] }}</p>                    

                    <div class="employer__date flex mt-4 text-gray-400">
                        <svg class="mr-2 h-6 w-6 fill-current  " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10S2 17.514 2 12 6.486 2 12 2zm0-2C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.848 12.459c.202.038.202.333.001.372-1.907.361-6.045 1.111-6.547 1.111-.719 0-1.301-.582-1.301-1.301 0-.512.77-5.447 1.125-7.445.034-.192.312-.181.343.014l.985 6.238 5.394 1.011z"/>
                        </svg>
                        <div class="date text-center text-lg tracking-tighter mb-2"> {{ $notification->created_at->diffForHumans() }} </div>
                    </div>

                    <button 
                        wire:click="selectSender({{ $notification->data['employer_id'] }})"
                        x-on:click="smodal=true" 
                        class="btn--secondary font-bold rounded-md mb-2 py-4">
                        Responder
                    </button>
                </div>
                
            </div>

        @endforeach

        <div x-show="smodal" @click.away="smodal = false" class=" w-1/3 top-60 left-1/3 z-50 border-solid border-4 border-main-yellow fixed">
            <div class="modal--header bg-main-yellow pl-4 py-3">
            <p class="text-gray-700 font-bold text-lg">Respondiendo a {{ $employer_name }} </p>
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
