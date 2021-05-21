<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence(); // una oracion
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'), // coloca guion en los espacios en blanco de la varible "name"
            'descripcion' => $this->faker->paragraph(), // un parrafo
            'categoria' => $this->faker->randomElement(['Desarrollo Web','Diseño Web','Programación Web']) //random de elementos del vector
        ];
    }
}
