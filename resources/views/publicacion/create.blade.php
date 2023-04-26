@extends('layouts.app')

@section('title')
    Crear nueva publicacion
@endsection

@section('contenido')
    <div class="md:flex md:items-center mx-5">
        <div class="md:w-1/2 px-10">
            <form class="dropzone border-dashed border-2 w-full h-72 rounded flex-col justify-center items-center bg-transparent" id="dropzone" action="#">

            </form>
        </div>
        <div class="md:w-1/2 px-10 bg-white p-6 rounded-lg shadow-lg">
            <form action="" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold" for="titulo">Titulo</label>
                    <input class="border p-1 w-full rounded-lg @error('titulo') border-red-500 @enderror" type="text"
                        id="titulo" name="titulo" value="{{ old('titulo') }}">
                    @error('titulo')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold" for="descripcion">Descripcion</label>
                    <textarea class="border p-1 w-full rounded-lg @error('descripcion') border-red-500 @enderror" type="text"
                        id="descripcion" name="descripcion">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <input class="bg-sky-600 text-white p-2 w-full rounded-lg font-bold hover:bg-sky-700 cursor-pointer"
                    type="submit" value="Publicar">

            </form>
        </div>
    </div>
@endsection
