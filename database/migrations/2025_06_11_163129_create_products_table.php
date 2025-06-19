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
<<<<<<< HEAD
            $table->string('sku')->unique();
            $table->string('product_name');
            $table->string('product_image')->nullable();
            $table->foreignId("category_id")->constrained()->onDelete("cascade");
            $table->foreignId("brand_id")->constrained()->onDelete("cascade");
            $table->decimal('cost_price', 10, 2);
            $table->decimal('selling_price', 10, 2);
=======
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('quantity')->default(0);

            $table->foreignId('brand_id')->constrained()->onDelete('cascade');

            $table->foreignId('category_id')->constrained()->onDelete('cascade');

>>>>>>> 85f4aadcfc4c574c7063aab123fd0fab0c93b174
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
