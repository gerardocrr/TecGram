@extends('layouts.app')

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('img/hombre.png') }}" width="50%" alt="">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <p class="text-gray-800 text-2xl">{{ $user->username }}</p>
                <p class="text-gray-700 text-sm font-bold mt-5">
                    0 <span class="font-normal">Seguidores</span>
                </p>
                <p class="text-gray-700 text-sm font-bold mt-5">
                    0 <span class="font-normal">Siguiendo</span>
                </p>
                <p class="text-gray-700 text-sm font-bold mt-5">
                    0 <span class="font-normal">Publicaciones</span>
                </p>
            </div>
        </div>
    </div>
@endsection
