@extends('layouts.app')

@section('title')
    <h1 class="text-white text-4xl  lg:text-7xl">Fitness Lab</h1>
@endsection

<style>
    .border-b {
        border-bottom-width: 1px;
        border-color: white;
        margin-top: 10px;
    }

</style>


@section('content')
   <section class=" h-full w-full flex flex-col justify-center items-center md:w-3/4">
        <div class=" h-3/4 w-full flex justify-center items-center">
            <ul class=" w-full h-auto text-white text-lg">
                <li  class="border-b"> >Nombre: {{$usuario->nombre}} </li>
                <li  class="border-b"> >Apellido: {{$usuario->apellido}}</li>
                <li  class="border-b"> >Dni: {{$usuario->dni}}</li>
                <li  class="border-b"> >Concurrencia: {{$usuario->concurrencia}}</li>
                <li  class="border-b"> >Fecha_registro: {{$usuario->fecha_registro}}</li>
                <li  class="border-b"> >Fecha_vencimiento: {{$usuario->fecha_vencimiento}}</li>
                <li  class="border-b"> >Estado: 
                    @if ($usuario->estado == "activo")
                        <span class="text-green-500">{{$usuario->estado}}</span>
                    @else 
                        <span class="text-red-500">{{$usuario->estado}}</span>
                    @endif
                </li>
                <li  class="border-b"> >Dias disponibles: {{$usuario->dias_disponibles}}</li>
            </ul>
        </div>
        <div class="w-full h-1/6 flex items-center items-center justify-center">
            <form action="{{ route('usuario.destroy', $usuario->id) }}" method="POST" class=" flex justify-evenly items-center w-full h-full mt-4">
                @csrf
                @method('DELETE')
                <button class="border border-white mb-4 p-2 rounded-lg text-white transition-all duration-500 ease-in-out hover:bg-white hover:text-green-800"> 
                    <a href="{{route('usuario.edit' , $usuario->id )}}">Editar</a>
                </button>
                <button class="border border-white mb-4 p-2 rounded-lg text-white transition-all duration-500 ease-in-out hover:bg-red-500 hover:text-white-800" type="submit">Eliminar</button>
                <x-user-container></x-user-container>
            </form>
        </div>
   </section>
@endsection





