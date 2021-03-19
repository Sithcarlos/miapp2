@extends('v1.layouts.main')

@section('content')
contenido inicial bienvenida..
<div class="">
    @guest
    <!-- Visitante -->
    Bienvenido visitante
    @else
    <!-- Usuario Logueado -->
    Bienvenido usuario
    @endguest
</div>
@endsection