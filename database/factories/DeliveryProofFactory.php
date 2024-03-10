<?php

namespace Database\Factories;


use App\Models\TransportGuide;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeliveryProof>
 */
class DeliveryProofFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transport_guide_id' => TransportGuide::factory(),
            'guide_photo' => 'guides/'.$this->faker->image('public/storage/guides', 640, 480, null, false),
            'document_photos' => 'documents/'.$this->faker->image('public/storage/documents', 640, 480, null, false),
        ];
    }
}
