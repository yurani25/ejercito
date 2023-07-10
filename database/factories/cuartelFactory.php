<?php

namespace Database\Factories;

use App\Models\cuartel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cuartel>
 */
class cuartelFactory extends Factory
{

    
    protected $model =cuartel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'ubicacion'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->randomElement(['Amway', ' Johnson & Johnson', 'Colgate Palmolive '])
        ];
    }
}
