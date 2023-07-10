<?php

namespace Database\Factories;

use App\Models\compañia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\compañia>
 */
class compañiaFactory extends Factory
{
    protected $model =compañia::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'empleados'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->randomElement(['Amway', ' Johnson & Johnson', 'Colgate Palmolive '])
        ];
    }
}
