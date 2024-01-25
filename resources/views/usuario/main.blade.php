@extends('layouts.app')



@section('title')
    <h1 class="text-white text-4xl  lg:text-7xl">Fitness Lab</h1>
@endsection

@section('content')
    <div class="border-2 border-white w-4/5 h-16 flex justify-center text-white items-center lg:w-2/5 2xl:w-96 transition-all duration-500 ease-in-out hover:bg-white hover:text-green-800" id="add-container">
        <a href="{{ route('usuario.create') }}">Agregar</a>
    </div>

    <div class="border-2 border-white w-4/5 h-16 flex justify-center text-white items-center lg:w-2/5 2xl:w-96 transition-all duration-500 ease-in-out hover:bg-white hover:text-green-800 " id="check-container">
        <a href="{{route('usuarios.index')}}">Consultar</a>
    </div>
    <footer class="border-2 border-white  text-white w-4/5 h-16 flex justify-center items-center  lg:w-2/5 2xl:w-96  transition-all duration-500 ease-in-out hover:bg-white hover:text-green-800" id="">by: @Niicoph </footer>
@endsection

