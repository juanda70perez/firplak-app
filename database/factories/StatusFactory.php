<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $states = ['Recogido', 'En Proceso', 'Tránsito', 'En Centro de Distribución', 'Reparto', 'Entregado'];

        return [
            'name' => $this->faker->unique()->randomElement($states),
            // Otros campos relevantes
        ];
    }
}
