@extends('layouts.plantilla')

@section('title', 'Show-Mostrar' . $curso->name)
@section('content')
    
<h1>METODO SHOW - Bienvenido al curso: {{$curso->name}}</h1> 
    
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <p><strong>Categoria: </strong>{{$curso->categoria}} </p>
    <p><strong>Descripción: </strong>{{$curso->descripcion}} </p>

@endsection
