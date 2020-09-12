@extends('layouts.app')

@section('content')
<div class="container mx-auto my-16">
  <div class="flex flex-wrap justify-center mx-6">
      <div class="w-full max-w-sm ">
          <div class="flex flex-col break-words bg-white border-2 rounded shadow-md">
            <div class="font-semibold bg-main-yellow text-gray-800 py-3 px-6 mb-0">
              {{ __('Login') }}
          </div>
           <livewire:login-form />
           <div class=" h-10 font-semibold bg-main-yellow text-gray-800 py-3 px-6 mb-0">
            <p class="hidden ">login</p>
        </div>
          </div>
      </div>
  </div>
</div>
@endsection
