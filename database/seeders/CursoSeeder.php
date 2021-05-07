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
        Curso::factory(50)->create();
    }
}
