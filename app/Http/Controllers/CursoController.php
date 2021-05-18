<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
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

    public function store(StoreCurso $request){
        
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }
  
    public function show(Curso $curso){
        return view('cursos.show', compact('curso'));
    }
    
    public function edit(Curso $curso){
        //return $curso;
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        $curso->update($request->all());
    
        return view('cursos.show', compact('curso'));
    }


    // OTRA FORMA DE ESCRIBIR LA FUNCION "show()"
    /*  public function show($curso){

        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    } */


    // public function edit($id){
    //     $curso = Curso::find($id);
    //     return view('cursos.edit', compact($curso));
    // }
    // OTRA FORMA DE ESCRIBIR LA FUNCION "edit()"

}
