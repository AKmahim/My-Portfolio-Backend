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
        Schema::create('post_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained('blogs')->onDelete('cascade'); // Link to the blog post
            $table->string('user'); // Name of the user who commented
            $table->string('user_email'); // Email of the user
            $table->text('comment_text'); // The comment content
            $table->unsignedInteger('comment_react_count')->default(0); // Reaction count
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_comments');
    }
};
