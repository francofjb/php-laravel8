<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);

Route::get('cursos',[CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');

/* Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null) {
    $mensaje = "Bienvenido al curso: $curso";
    if ($categoria){
        $mensaje = "Bienvenido al curso $curso, de la categoria: $categoria";
    }
    return $mensaje;
});
 */