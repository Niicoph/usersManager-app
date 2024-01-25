<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->firstName(),
            'apellido' => fake()->lastName(),                                        
            'dni' => fake()->numberBetween(18000000, 55000000),
            'fecha_registro' => fake()->dateTimeBetween('-5 years', 'now'),
            'dias_disponibles' => fake()->numberBetween(0, 30),
            'concurrencia' => fake()->numberBetween(1, 6),
            'fecha_vencimiento' => fake()->dateTimeBetween('now' , '+30 days'),
            'estado' => fake()->randomElement(['activo']),
        ];
    }
}
