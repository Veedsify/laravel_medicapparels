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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_keywords');
            $table->string('description');
            $table->string('article_id')->unique();
            $table->string('slug');
            $table->string('image');
            $table->string('author_name');
            $table->string('author_image');
            $table->string('author_description');
            $table->string('author_id')->unique();
            $table->string('category');
            $table->string('tags');
            $table->string('status');
            $table->string('visibility');
            $table->text('content');
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
