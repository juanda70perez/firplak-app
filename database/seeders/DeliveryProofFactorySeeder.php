<?php

namespace Database\Seeders;

use App\Models\DeliveryProof;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryProofFactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DeliveryProof::factory(8)->create();
    }
}
