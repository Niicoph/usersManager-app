@extends('layouts.app')

@section('title')
    <h1 class="text-white text-4xl  lg:text-7xl">Fitness Lab</h1>
@endsection

@section('content')
        @if(session('error'))
        <label class="text-red-500">{{ session('error') }}</label>
        @endif
<form action="{{ route('usuario.update' , $usuario->id) }}" method="POST" class="h-3/4 w-3/4 flex justify-evenly items-center flex-col">
    @csrf
    @method('PUT')
    <input type="text" name="nombre" id="nombre" class="border border-white rounded-sm bg-transparent text-white h-10 mb-4 lg:w-2/4" placeholder="Nombre" value="{{ old('nombre', $usuario->nombre) }}">
    @error('nombre')
    <label class="text-red-500">{{ $message }} </label>
    @enderror
    <input type="text" name="apellido" id="apellido" class="border border-white rounded-sm bg-transparent text-white h-10 mb-4 lg:w-2/4" placeholder="Apellido" value="{{ old('apellido', $usuario->apellido) }}">
    @error('apellido')
    <label class="text-red-500">{{ $message }} </label>
    @enderror
    <input type="number" name="dni" id="dni" class="border border-white rounded-sm bg-transparent text-white h-10 mb-4 appearance-none lg:w-2/4" placeholder="Dni" style="-moz-appearance: textfield;" value="{{ old('dni', $usuario->dni) }}">
    @error('dni')
    <label class="text-red-500">{{ $message }} </label>
    @enderror
    <input type="number" name="concurrencia" id="concurrencia" class="border border-white rounded-sm bg-transparent text-white h-10 mb-4 appearance-none lg:w-2/4" placeholder="Concurrencia" style="-moz-appearance: textfield;" value="{{ old('concurrencia', $usuario->concurrencia) }}">
    @error('concurrencia')
    <label class="text-red-500">{{ $message }} </label>
    @enderror
    <button type="submit" class="border border-white rounded-lg p-2 bg-white text-green-800">Editar</button>
    <x-user-container></x-user-container>

    @if(session('error'))
        <p class="text-red-500">{{ session('error') }}</p>
    @endif
</form>
@endsection