<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        
        //La variable $cursos guarda todos los registros recuperados en forma de coleccion PAGINADA
        $cursos = Curso::paginate();
        
        //Ahora, vamos a pasar le variable $cursos a la vista con compact()
        return view('cursos.index', compact('cursos'));
    }

    public function create(){

        //return "METODOCREATE - En esta pagina podras crear un curso";
        return view('cursos.create');
    }

    public function show($id){

        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    }
}
