<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        //$this->call(CursoSeeder::class); // si utilizo CursoSeeder.php
        Curso::factory(50)->create(); // si NO utilizo CursoSeeder.php
    }
}
