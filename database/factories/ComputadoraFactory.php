<?php

namespace Database\Factories;

use App\Models\Computadora;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComputadoraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Computadora::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'marca' => $this->faker->randomElement(['DELL', 'HP', 'GENERICA', 'Lenovo']),  
            'modelo' => $this->faker->randomElement(['VOSTRO 460', 'VOSTRO 270', 'OPTIPLEX 3020', 'OPTIPLEX 5070']),
            'service' => $this->faker->randomElement(['ASP7845' ,'54WERS', '896SS', 'QWS568', 'MNR3T', 'FT122S']),
            'codigo' => $this->faker->unique()->randomNumber(5),
            'procesador' => $this->faker->randomElement(['Intel Dual Core 2.7 GHz', 'Intel Core i5 3.4 GHz', 'Intel Core i7 3.0 GHz']),
            'estado' => $this->faker->randomElement(['Disponible'])
        ];
    }
}
