<div>    
    <div class="saludos  border-b-2 border-solid border-gray-300 flex justify-between items-center">
        <div>
            <div class="flex items-center">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24">
                    <path d="M13.403 24H0V2h3C4.231 2 5.181.916 6 0h8c.821.916 1.772 2 3 2h3v9.15c-.485-.098-.987-.15-1.5-.15l-.5.016V4h-4l-2 2H8.103L6 4H2v18h9.866c.397.751.919 1.427 1.537 2zM18.5 13c3.035 0 5.5 2.464 5.5 5.5S21.535 24 18.5 24c-3.036 0-5.5-2.464-5.5-5.5s2.464-5.5 5.5-5.5zm0 2c1.931 0 3.5 1.568 3.5 3.5S20.431 22 18.5 22c-1.932 0-3.5-1.568-3.5-3.5s1.568-3.5 3.5-3.5zm2.5 4h-3v-3h1v2h2v1zM5.849 14.948L4.8 13.964l-.8.823 1.864 1.776L9 13.371l-.815-.808-2.336 2.385zM12 16h-2v-1h2v1zm2-2h-4v-1h4v1zM5.849 9.975L4.8 8.992l-.8.823 1.864 1.776L9 8.399l-.815-.808-2.336 2.384zM14 11h-4v-1h4v1zm0-2h-4V8h4v1zM9 3c0 .552.449 1 1 1 .553 0 1-.448 1-1s-.447-1-1-1c-.551 0-1 .448-1 1z"/>
                </svg>
                <p class=" subtitulo ml-4 font-semibold text-gray-800 ">Estos son tus proyectos</p>
            </div>
            <p class="text-gray-500 text-lg ">Revisa el estado y avance de tus ordenes</p>
        </div>

        <a href="{{ Route('employer-create-project') }}">
        <div class="flex ">
            
                <svg class="w-8 h-8 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm7 14h-5v5h-4v-5H5v-4h5V5h4v5h5v4z"/>
                </svg>
                <p class="ml-2">Crea un proyecto</p>
            
        </div>
        </a>
    </div>
        
        
    
    
    <div class="ordenes dbody block xl:w-4/5 xl:mx-auto ">
        <table class="table-fixed mt-4">
            <thead class=" bg-main-yellow  text-black border-black border-solid border-2 ">
                <th class=" w-1/4 ">Proyecto</th>
                <th class=" w-1/2 ">Descripción</th>
                <th class="w-4">Asignado a:</th>
                <th class="w-3">Estado</th>
            </thead>
            <tbody class="  ">
            
                @foreach ($orders as $order)
                    <tr class="project__item text-sm text-center">
                        <td class=" border-black border-solid border-2 px-2 py-4">{{ $order->titulo }}</td>
                        <td class=" border-black border-solid border-2 px-2 py-4">{{ $order->descripcion }}</td>
                        <td class=" border-black border-solid border-2 px-2 py-4">{{ $order->expert->nombre }}</td>
                        <td class=" border-black border-solid border-2 px-2 py-4">{{ $order->status_name }}</td>
                    </tr>
                    
                @endforeach
            
            </tbody>
        </table>
    </div>
    
</div>
