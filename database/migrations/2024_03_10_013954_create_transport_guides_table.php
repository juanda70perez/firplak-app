<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transport_guides', function (Blueprint $table) {
            $table->id();
            $table->string('consecutive_number')->unique();
            $table->integer('customer_id')->unique();
            $table->string('customer_name');
            $table->timestamp('dispatch_date');
            $table->timestamps();
            $table->foreignId('order_id')->references('id')->on('orders')
;        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transport_guides');
    }
};
