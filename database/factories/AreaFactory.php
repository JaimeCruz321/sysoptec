<?php

namespace Database\Factories;

use App\Models\Area;
use Illuminate\Database\Eloquent\Factories\Factory;

class AreaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Area::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'nombre' => $this->faker->unique()->randomElement(['unidad de Tecnologias de la Informacion', 'Unidad de Administracion y Finanzas', 'Gerencia de Planificacion', 'Presidencia', 'Gerencia de Administracion', 'Asesoria Legal', 'Estudios Electricos']),
            'abreviado' => $this->faker->unique()->randomElement(['UTI', 'UAF', 'GP', 'PRE', 'GA', 'AL', 'EE'])
        ];
    }
}
