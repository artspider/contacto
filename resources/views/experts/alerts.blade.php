@extends('experts.layouts.internal')

@section('content')

<div class="saludos mt-20 mb-4 mx-4">
  <p class=" titulo font-bold mb-1"> {{ auth()->user()->name }}, </p>
  <p class=" subtitulo font-semibold text-gray-800 ">Estos son tus mensajes</p>
</div>

<div class=" alerts dbody block  xl:w-4/5 xl:mx-auto ">
    <div class="alerts--notification bg-orange-100 border-l-4 border-orange-500 flex rounded-lg shadow-lg py-2">
        <div class="employer__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400">
            <img class="employer__avatar w-12 h-12 rounded-full mt-2 " src="/img/avatar2.png" alt="">
            <div class="date text-black text-xl tracking-tighter mb-2"><span class="text-gray-400" >27</span>AGO</div>
        </div>
        <div class="notification ml-4">
            <p class="text-lg font-bold">DeMex soft</p>
            <p class="text-sm">Tenemos un proyecto de software que queremos que desarrolles, te llamaremos en un momento</p>
        </div>
    </div>

    <div class="alerts--notification bg-purple-100 border-l-4 border-purple-500 flex rounded-lg shadow-lg py-2">
        <div class="employer__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400">
            <img class="employer__avatar w-12 h-12 rounded-full mt-2 " src="/img/avatar2.png" alt="">
            <div class="date text-black text-xl tracking-tighter mb-2"><span class="text-gray-400" >25</span>AGO</div>
        </div>
        <div class="notification ml-4">
            <p class="text-lg font-bold">Admin</p>
            <p class="text-sm">Tu subscripción vence en 7 días, no olvides renovar.</p>
        </div>
    </div>

    <div class="alerts--notification bg-red-100 border-l-4 border-red-500 flex rounded-lg shadow-lg  py-2">
        <div class="employer__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400">
            <img class="employer__avatar w-12 h-12 rounded-full mt-2 " src="/img/avatar2.png" alt="">
            <div class="date text-black text-xl tracking-tighter mb-2"><span class="text-gray-400" >25</span>AGO</div>
        </div>
        <div class="notification ml-4">
            <p class="text-lg font-bold">Admin</p>
            <p class="text-sm">Tu depósito por el paquete de 6 meses ha sido recibido, gracias.</p>
        </div>
    </div>

    <div class="alerts--notification bg-green-100 border-l-4 border-green-500 flex rounded-lg shadow-lg py-2">
        <div class="employer__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400">
            <img class="employer__avatar w-12 h-12 rounded-full mt-2 " src="/img/avatar2.png" alt="">
            <div class="date text-black text-xl tracking-tighter mb-2"><span class="text-gray-400" >30</span>JUL</div>
        </div>
        <div class="notification ml-4">
            <p class="text-lg font-bold">Admin</p>
            <p class="text-sm">Te damos la bienvenida a subcontrata!.</p>
        </div>
    </div>
    <div class="alerts--notification bg-green-100 border-l-4 border-green-500 flex rounded-lg shadow-lg  py-2">
      <div class="employer__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400">
          <img class="employer__avatar w-12 h-12 rounded-full mt-2 " src="/img/avatar2.png" alt="">
          <div class="date text-black text-xl tracking-tighter mb-2"><span class="text-gray-400" >30</span>JUL</div>
      </div>
      <div class="notification ml-4">
          <p class="text-lg font-bold">Admin</p>
          <p class="text-sm">Te damos la bienvenida a subcontrata!.</p>
      </div>
  </div>
</div>



@endsection
