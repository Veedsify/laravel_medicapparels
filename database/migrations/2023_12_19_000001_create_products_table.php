<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Add this line

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->text('description');
            $table->integer('stock');
            $table->integer('category_id');
            $table->string('category')->nullable();
            $table->string('uuid');
            $table->text('user_id');
            $table->string('slug');
            $table->string('weight');
            $table->string('dimensions');
            $table->string('featured_video');
            $table->string('status')->default('active');
            $table->string('visibility')->default('active');
            $table->string('sku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
