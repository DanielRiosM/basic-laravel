@extends('layouts.appp')
@section('title', 'este es el titulo')

<h1>Hola {{$name}} bienvenido</h1>

@section('content')

tu nombre {{$name}}<br>
tu apellido {{$apellido}}<br>
tu edad {{$edad}}<br>

@component('components.alert', ['var' => 'mi variable'])

    @slot('title')

    advertencia

    @endslot

    <p>esto es un mensaje de alertas</p>

@endcomponent
@endsection