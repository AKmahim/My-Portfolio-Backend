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
            $table->string('author_id');
            $table->text('short_description');
            $table->string('slug')->unique();
            $table->string('keyword')->nullable(); // Optional: for SEO purposes
            $table->longText('content');
            $table->unsignedInteger('comment_count')->default(0);
            $table->string('blog_category');
            $table->string('blog_thumbnail')->nullable();
            $table->string('blog_short_thumbnail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
