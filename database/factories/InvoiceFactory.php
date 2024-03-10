<?php

namespace Database\Factories;

use App\Models\TransportGuide;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $transportGuide = TransportGuide::all()->random();

        return [
            'radication_date' => $this->faker->date,
            'transport_guide_id' => $transportGuide->id,
        ];
    }
}