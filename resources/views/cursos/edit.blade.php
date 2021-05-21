@extends('layouts.plantilla')

@section('title', 'Edit')
@section('content')
    <h1>METODO EDIT - En esta pagina podras EDITAR un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        
        @csrf
        @method('put')
        
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name',$curso->name)}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        {{--  ////////////////////////////////////////////////  --}}
        <br>
        <label>
            Slug:
            <br>
            <input type="text" name="slug" value="{{old('slug',$curso->slug)}}">
        </label>

        @error('slug')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror        
        {{--  ////////////////////////////////////////////////  --}}
        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
        </label>

        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label>
    
        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
       @enderror
    
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection