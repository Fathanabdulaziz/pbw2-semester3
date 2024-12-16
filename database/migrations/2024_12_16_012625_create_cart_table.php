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
        Schema::create('cart', function (Blueprint $table) {
        $table->id(); // Primary key
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table
        $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Foreign key to products table
        $table->integer('quantity')->default(1); // Quantity of product
        $table->decimal('total_price', 10, 2); // Total price of the cart item
        $table->timestamps(); // Created at and updated at
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
