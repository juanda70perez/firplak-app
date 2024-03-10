<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TransportGuideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = Status::all()->random();
        $order = Order::all()->random();
        return [
            'consecutive_number' => $this->faker->unique()->word,
            'dispatch_date' => $this->faker->date,
            'customer_id' => $this->faker->randomNumber(),
            'customer_name' => $this->faker->word(),
            'order_id' => $order->id,
            'status_id' => $status->id,
        ];
    }
}
