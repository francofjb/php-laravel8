<?php

namespace Database\Seeders;

use App\Models\Curso; 
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();

        $curso->name = "Laravel";
        $curso->descripcion = "El mejor framework de PHP";
        $curso->categoria = "Desarrollo web";
        $curso->save();

        $curso2 = new Curso();

        $curso2->name = "Laravel2";
        $curso2->descripcion = "El mejor framework de PHP2";
        $curso2->categoria = "Desarrollo web2";
        $curso2->save();

        $curso3 = new Curso();

        $curso3->name = "Laravel3";
        $curso3->descripcion = "El mejor framework de PHP3";
        $curso3->categoria = "Desarrollo web3";
        $curso3->save();
    }
}
