<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Invoice;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        File::deleteDirectory(public_path('storage/documents'));

        File::makeDirectory(public_path('storage/documents'));
        File::deleteDirectory(public_path('storage/guides'));
        File::makeDirectory(public_path('storage/guides'));
        
        $this->call(OrderSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(TransportGuideSeeder::class);
        $this->call(DeliveryProofFactorySeeder::class);
        $this->call(InvoiceSeeder::class);
    }
}
