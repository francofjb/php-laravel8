<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        
        //return "METODOINDEX - Bienvenidos al curso Franco-Laravel";
        return view('cursos.index');
    }

    public function create(){

        //return "METODOCREATE - En esta pagina podras crear un curso";
        return view('cursos.create');
    }

    public function show($curso){

        //return "METODOSHOW - Bienvenido al curso: $curso";
        
        
        //return view('cursos.show', ['curso' => $curso]); // *se puede colocar de otra forma
        //*
        //compact ('curso'); es igual a ['curso' => $curso] entonces se puede escribir de la siguiente manera:
        return view('cursos.show', compact('curso'));
    }
}
