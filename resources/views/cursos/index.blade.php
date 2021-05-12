@extends('layouts.plantilla')

@section('title', 'Cursos')
@section('content')
    <h1>METODO INDEX - Bienvenidos al curso Franco-Laravel</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach($cursos as $curso)
            <li>
                <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a>
            </li>
        @endforeach
    </ul>   
    
        {{$cursos->links()}}

@endsection    
