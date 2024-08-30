<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word, // Genera una palabra aleatoria
            'descripcion' => $this->faker->sentence, // Genera una oración aleatoria
            'pvp' => $this->faker->randomFloat(2, 1, 1000), // Genera un número decimal aleatorio entre 1 y 1000
            'tipo' => $this->faker->word, // Genera una palabra aleatoria  
        ];
    }
}
