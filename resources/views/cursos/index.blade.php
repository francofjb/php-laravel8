@extends('layouts.plantilla')

@section('title', 'Cursos')
@section('content')
    <h1>METODO INDEX - Bienvenidos al curso Franco-Laravel</h1>
    <ul>
        @foreach($cursos as $curso)
            <li>{{$curso->name}}</li>
        @endforeach
    </ul>   
    
        {{$cursos->links()}}
        
@endsection    
