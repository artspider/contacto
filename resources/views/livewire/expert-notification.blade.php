<div>
    <div class="saludos mt-20 mb-4 mx-4">
        <p class=" titulo font-bold mb-1"> {{ auth()->user()->name }}, </p>
        <p class=" subtitulo font-semibold text-gray-800 ">Estos son tus mensajes</p>
      </div>

      <div class=" alerts dbody block  xl:w-4/5 xl:mx-auto ">

        @foreach ($notifications as $notification)
            <div class=" alerts--notification min bg-orange-100 border-l-4 border-orange-500 flex rounded-lg shadow-lg py-2">
                <div class="employer__date w-1/4 flex-shrink-0 flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400">
                    <svg class=" fill-current w-10 -h-10  " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 1C5.662 1 0 5.226 0 11.007c0 2.05.739 4.063 2.047 5.625.055 1.83-1.023 4.456-1.993 6.368 2.602-.47 6.301-1.508 7.978-2.536C17.268 22.711 24 17.059 24 11.007 24 5.195 18.299 1 12 1zm1 15h-2v-6h2v6zm-1-7.75c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z"/></svg>
                    <div class="date text-black text-xl tracking-tighter mb-2"> {{ $notification->created_at->diffForHumans() }} </div>
                </div>
                <div class="notification w-full ml-4 flex flex-col">
                    <p class="text-lg font-bold">{{ $notification->data['employer_name'] }}</p>
                    <p class="text-sm">{{ $notification->data['employer_msg'] }}</p>
                    <div class="flex flex-shrink-0 flex-grow w-full justify-end items-end ">
                        <svg class=" justify-items-end fill-current h-6 w-6 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384"><path d="M149.333 117.333V32L0 181.333l149.333 149.333V243.2C256 243.2 330.667 277.333 384 352c-21.333-106.667-85.333-213.333-234.667-234.667z"/></svg>
                    </div>
                </div>
            </div>

        @endforeach



      </div>
</div>
