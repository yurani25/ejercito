<?php

namespace Database\Factories;

use App\Models\cuerpoe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cuerpoe>
 */
class cuerpoeFactory extends Factory
{
    protected $model =cuerpoe::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->randomElement(['Amway', ' Johnson & Johnson', 'Colgate Palmolive ']) 
        ];
    }
}
