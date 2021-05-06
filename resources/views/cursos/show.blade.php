@extends('layouts.plantilla')

@section('title', 'Show-Mostrar' . $curso)
@section('content')
    <h1>METODO SHOW git - Bienvenido al curso: <?php echo $curso; ?></h1>
    
    {{--  otra forma de mostrar la variable   --}}
    <h1>METODO SHOW - Bienvenido al curso: {{$curso}} - otra forma de mostrar la variable en blade</h1> 
@endsection
