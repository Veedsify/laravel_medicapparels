<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table): void {
            $table->id();
            $table->text('name');
            $table->text('comment');
            $table->text('email');
            $table->text('image');
            $table->text('comment_id');
            $table->text('user_id');
            $table->string('article_id');
            $table->foreign('article_id')->references('article_id')->on('blogs')->cascadeOnDelete();
            $table->text('status')->default('pending');
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
