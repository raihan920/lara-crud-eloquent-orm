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
            $table->string('product_name', 100)->nullable();
            $table->integer('category_id')->nullable();
            $table->string('unit_type_short_code', 10)->nullable();
            $table->decimal('quantity_per_unit', 11, 2)->nullable();
            $table->decimal('unit_price', 11, 2)->nullable();
            $table->decimal('unit_in_stock', 11, 2)->nullable();
            $table->decimal('unit_on_order', 11, 2)->default(0);
            $table->softDeletes()->nullable();
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
