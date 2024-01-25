@extends('layouts.app')

@section('title')
    <h1 class="text-white text-4xl  lg:text-7xl">Fitness Lab</h1>
@endsection

@section('content')
    <h1 class="text-green-500">Usuario actualizado con exito!</h1>
    <x-user-container></x-user-container>
@endsection