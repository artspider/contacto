@extends('experts.layouts.internal')

@section('content')

<div class="saludos mb-4 mx-4">
  <p class=" titulo font-bold mb-1">Hola {{ auth()->user()->name }},</p>
  <p class=" subtitulo font-semibold text-gray-800 ">
    Bienvenido de vuelta a tu tablero
  </p>
</div>

<div class="ordenes dbody block xl:w-4/5 xl:mx-auto ">
  <div
    class="ordenes--notification bg-red-100 border-l-4 border-red-500 flex rounded-lg shadow-lg py-2"
  >
    <div
      class="orden__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400"
    >
      <p class=" font-semibold ">Orden 00001</p>
      <div class="date text-black text-xl tracking-tighter mb-2">
        <span class="text-gray-400">25</span>AGO
      </div>
    </div>
    <div class="notification w-full mx-6">
      <p class="text-lg font-bold">Azure</p>
      <p class="text-sm mb-4 mt-2">
        El cliente CEMEX te ha contratado para desarrollar su sitio web.
      </p>
      <div class="flex justify-end">
        <p>Status: abierto</p>
      </div>
    </div>
  </div>

  <div
    class="ordenes--notification bg-red-100 border-l-4 border-red-500 flex rounded-lg shadow-lg  py-2"
  >
    <div
      class="orden__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400"
    >
      <p class=" font-semibold ">Orden 00001</p>
      <div class="date text-black text-xl tracking-tighter mb-2">
        <span class="text-gray-400">25</span>AGO
      </div>
    </div>
    <div class="notification w-full mx-6">
      <p class="text-lg font-bold">Azure</p>
      <p class="text-sm mb-4 mt-2">
        El cliente CEMEX te ha contratado para desarrollar su sitio web.
      </p>
      <div class="flex justify-end">
        <p>Status: abierto</p>
      </div>
    </div>
  </div>

  <div
    class="ordenes--notification bg-red-100 border-l-4 border-red-500 flex rounded-lg shadow-lg py-2"
  >
    <div
      class="orden__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400"
    >
      <p class=" font-semibold ">Orden 00001</p>
      <div class="date text-black text-xl tracking-tighter mb-2">
        <span class="text-gray-400">25</span>AGO
      </div>
    </div>
    <div class="notification w-full mx-6">
      <p class="text-lg font-bold">Azure</p>
      <p class="text-sm mb-4 mt-2">
        El cliente CEMEX te ha contratado para desarrollar su sitio web.
      </p>
      <div class="flex justify-end">
        <p>Status: abierto</p>
      </div>
    </div>
  </div>

  <div
    class="ordenes--notification bg-red-100 border-l-4 border-red-500 flex rounded-lg shadow-lg py-2"
  >
    <div
      class="orden__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400"
    >
      <p class=" font-semibold ">Orden 00001</p>
      <div class="date text-black text-xl tracking-tighter mb-2">
        <span class="text-gray-400">25</span>AGO
      </div>
    </div>
    <div class="notification w-full mx-6">
      <p class="text-lg font-bold">Azure</p>
      <p class="text-sm mb-4 mt-2">
        El cliente CEMEX te ha contratado para desarrollar su sitio web.
      </p>
      <div class="flex justify-end">
        <p>Status: abierto</p>
      </div>
    </div>
  </div>

  <div
    class="ordenes--notification bg-red-100 border-l-4 border-red-500 flex rounded-lg shadow-lg py-2"
  >
    <div
      class="orden__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400"
    >
      <p class=" font-semibold ">Orden 00001</p>
      <div class="date text-black text-xl tracking-tighter mb-2">
        <span class="text-gray-400">25</span>AGO
      </div>
    </div>
    <div class="notification w-full mx-6">
      <p class="text-lg font-bold">Azure</p>
      <p class="text-sm mb-4 mt-2">
        El cliente CEMEX te ha contratado para desarrollar su sitio web.
      </p>
      <div class="flex justify-end">
        <p>Status: abierto</p>
      </div>
    </div>
  </div>

  <div
    class="ordenes--notification bg-red-100 border-l-4 border-red-500 flex rounded-lg shadow-lg py-2"
  >
    <div
      class="orden__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400"
    >
      <p class=" font-semibold ">Orden 00001</p>
      <div class="date text-black text-xl tracking-tighter mb-2">
        <span class="text-gray-400">25</span>AGO
      </div>
    </div>
    <div class="notification w-full mx-6">
      <p class="text-lg font-bold">Azure</p>
      <p class="text-sm mb-4 mt-2">
        El cliente CEMEX te ha contratado para desarrollar su sitio web.
      </p>
      <div class="flex justify-end">
        <p>Status: abierto</p>
      </div>
    </div>
  </div>

  <div
    class="ordenes--notification bg-red-100 border-l-4 border-red-500 flex rounded-lg shadow-lg  py-2"
  >
    <div
      class="orden__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400"
    >
      <p class=" font-semibold ">Orden 00001</p>
      <div class="date text-black text-xl tracking-tighter mb-2">
        <span class="text-gray-400">25</span>AGO
      </div>
    </div>
    <div class="notification w-full mx-6">
      <p class="text-lg font-bold">Azure</p>
      <p class="text-sm mb-4 mt-2">
        El cliente CEMEX te ha contratado para desarrollar su sitio web.
      </p>
      <div class="flex justify-end">
        <p>Status: abierto</p>
      </div>
    </div>
  </div>

  <div
    class="ordenes--notification bg-red-100 border-l-4 border-red-500 flex rounded-lg shadow-lg py-2"
  >
    <div
      class="orden__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400"
    >
      <p class=" font-semibold ">Orden 00001</p>
      <div class="date text-black text-xl tracking-tighter mb-2">
        <span class="text-gray-400">25</span>AGO
      </div>
    </div>
    <div class="notification w-full mx-6">
      <p class="text-lg font-bold">Azure</p>
      <p class="text-sm mb-4 mt-2">
        El cliente CEMEX te ha contratado para desarrollar su sitio web.
      </p>
      <div class="flex justify-end">
        <p>Status: abierto</p>
      </div>
    </div>
  </div>

  <div
    class="ordenes--notification bg-red-100 border-l-4 border-red-500 flex rounded-lg shadow-lg py-2"
  >
    <div
      class="orden__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400"
    >
      <p class=" font-semibold ">Orden 00001</p>
      <div class="date text-black text-xl tracking-tighter mb-2">
        <span class="text-gray-400">25</span>AGO
      </div>
    </div>
    <div class="notification w-full mx-6">
      <p class="text-lg font-bold">Azure</p>
      <p class="text-sm mb-4 mt-2">
        El cliente CEMEX te ha contratado para desarrollar su sitio web.
      </p>
      <div class="flex justify-end">
        <p>Status: abierto</p>
      </div>
    </div>
  </div>

  <div
    class="ordenes--notification bg-red-100 border-l-4 border-red-500 flex rounded-lg shadow-lg py-2"
  >
    <div
      class="orden__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400"
    >
      <p class=" font-semibold ">Orden 00001</p>
      <div class="date text-black text-xl tracking-tighter mb-2">
        <span class="text-gray-400">25</span>AGO
      </div>
    </div>
    <div class="notification w-full mx-6">
      <p class="text-lg font-bold">Azure</p>
      <p class="text-sm mb-4 mt-2">
        El cliente CEMEX te ha contratado para desarrollar su sitio web.
      </p>
      <div class="flex justify-end">
        <p>Status: abierto</p>
      </div>
    </div>
  </div>

  <div
    class="ordenes--notification bg-red-100 border-l-4 border-red-500 flex rounded-lg shadow-lg py-2"
  >
    <div
      class="orden__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400"
    >
      <p class=" font-semibold ">Orden 00001</p>
      <div class="date text-black text-xl tracking-tighter mb-2">
        <span class="text-gray-400">25</span>AGO
      </div>
    </div>
    <div class="notification w-full mx-6">
      <p class="text-lg font-bold">Azure</p>
      <p class="text-sm mb-4 mt-2">
        El cliente CEMEX te ha contratado para desarrollar su sitio web.
      </p>
      <div class="flex justify-end">
        <p>Status: abierto</p>
      </div>
    </div>
  </div>
</div>
@endsection
