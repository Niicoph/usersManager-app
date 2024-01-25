@extends('layouts.app')

@section('title')
    <h1 class="text-white text-4xl  lg:text-7xl">Fitness Lab</h1>
@endsection

@section('content')
  <div class="h-full w-full border border-red-500  flex justify-center items-center flex-col">
    <h1 class="text-red-500 flex justify-center items-center mb-4">Usuario eliminado con exito!</h1>
    <x-user-container></x-user-container>
  </div>
@endsection