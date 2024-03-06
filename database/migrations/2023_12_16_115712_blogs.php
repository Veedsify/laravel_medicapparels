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
            $table->string('title');//this
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_keywords');//this
            $table->string('description');//this
            $table->string('article_id')->unique();
            $table->string('slug');
            $table->string('image');//this
            $table->string('author_name');
            $table->string('author_image');
            $table->string('author_description');
            $table->string('author_id')->unique();
            $table->string('category');//this
            $table->string('tags');//this
            $table->string('status');
            $table->string('visibility');//this
            $table->text('content'); //this
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
