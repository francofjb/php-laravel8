@extends('layouts.plantilla')

@section('title', 'Show-Mostrar' . $curso->name)
@section('content')
    
<h1>METODO SHOW - Bienvenido al curso: {{$curso->name}}</h1> 
    
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>
    <br>
    <p><strong>Categoria: </strong>{{$curso->categoria}} </p>
    <p><strong>Descripción: </strong>{{$curso->descripcion}} </p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>

@endsection
