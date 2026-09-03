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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            // Seller
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');

            // Product information
            $table->string('name');
            $table->text('description')->nullable();

            // Pricing
            $table->decimal('price', 10, 2);

            // Product details
            $table->string('category');
            $table->string('condition')->default('Used');
            $table->unsignedInteger('stock')->default(1);

            // Optional image
            $table->string('image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};