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
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_id')->constrained(
                table: 'purchases',
                indexName: 'purchase_details_purchase_id'
            );
            $table->foreignId('product_id')->constrained(
                table: 'products',
                indexName: 'purchase_details_product_id'
            );
            $table->integer('purchase_price');
            $table->integer('amount');
            $table->integer('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_details');
    }
};
