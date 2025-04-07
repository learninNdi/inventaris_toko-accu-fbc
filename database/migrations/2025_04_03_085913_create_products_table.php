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
            $table->string('name');
            $table->integer('price');
            $table->integer('stock');


            $table->foreignId('brand_id')->constrained(
                table: 'brands',
                indexName: 'products_brand_id'
            );

            $table->foreignId('category_id')->constrained(
                table: 'categories',
                indexName: 'products_category_id'
            );

            $table->foreignId('type_id')->constrained(
                table: 'types',
                indexName: 'products_type_id'
            );

            $table->foreignId('vehicle_id')->constrained(
                table: 'vehicles',
                indexName: 'products_vehicle_id'
            );

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
