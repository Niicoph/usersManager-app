@extends('layouts.app')

@section('title')
    <h1 class="text-white text-4xl  lg:text-7xl">Fitness Lab</h1>
@endsection

@section('content')
    <section class="h-full w-full flex flex-col justify-center items-center">
        <form action="" method="" class="w-3/4 h-24 flex justify-center items-center ">
            <input type="number" placeholder="dni" id="dni" name="dni" class="w-full h-1/4 border border-white appearance-none lg:w-3/4" style="-moz-appearance: textfield; /* Firefox */" required>
            <button type="submit" class="w-8 h-1/4 flex justify-center items-center">
                <svg fill="#ffffff" class="h-7 w-7 mt-1" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 488.4 488.4" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M0,203.25c0,112.1,91.2,203.2,203.2,203.2c51.6,0,98.8-19.4,134.7-51.2l129.5,129.5c2.4,2.4,5.5,3.6,8.7,3.6 s6.3-1.2,8.7-3.6c4.8-4.8,4.8-12.5,0-17.3l-129.6-129.5c31.8-35.9,51.2-83,51.2-134.7c0-112.1-91.2-203.2-203.2-203.2 S0,91.15,0,203.25z M381.9,203.25c0,98.5-80.2,178.7-178.7,178.7s-178.7-80.2-178.7-178.7s80.2-178.7,178.7-178.7 S381.9,104.65,381.9,203.25z"></path> </g> </g> </g></svg>
            </button>
        </form>
        <div class="w-3/4 h-4/5 mb-4 overflow-x-hidden overflow-y-auto">
            @foreach ($usuarios as $usuario)
            <div class="h-14 w-full flex flex-row border-2 border-white text-white mb-2">
                <div class=" h-full w-4/5">
                    <p>Nombre: {{ $usuario->nombre }}</p>
                    <p class="mt-1">Dni: {{ $usuario->dni }}</p>
                </div>
                <div class="h-full w-1/5 flex flex-col p-2">
                    <div class="border bg-green-500 h-full w-full flex justify-center items-center rounded-lg  transition-all duration-500 ease-in-out hover:bg-white hover:text-green-500 " id="check-id-container"> 
                        <a href="{{route('usuario.show' , $usuario->id)}}">Ver</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="flex justify-center items-center w-3/4">
            <x-user-container>  </x-user-container>    
            <button class="border border-white mb-4 ml-4 p-2 rounded-lg text-white transition-all duration-500 ease-in-out hover:bg-white hover:text-green-800" id="back-container">
                <a href="{{route('usuarios.index')}}" id="back-container">Limpiar</a>            
            </button> 
        </div>

    </section>
@endsection