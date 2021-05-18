<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

   // forma de asociar manualmente una tabla (sin usar convención) 
   // protected $table = "users"; 
  
   // arreglo con nombres de campos con permiso para ser agregados a la tabla.
   protected $fillable = [
       'name',
       'descripcion',
       'categoria'
    ];
    
    // arreglo con nombres de los campos protegidos de la tabla.
    protected $guarded = [];
}
