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
        Schema::create('blog_authors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation');
            $table->string('profile_pic')->nullable(); // Path to profile picture
            $table->text('bio')->nullable(); // Short bio of the author
            $table->string('fb_link')->nullable(); // Facebook link
            $table->string('linkedin_link')->nullable(); // LinkedIn link
            $table->string('twitter_link')->nullable(); // Twitter link
            $table->string('instagram_link')->nullable(); // Instagram link
            $table->string('youtube_link')->nullable(); // YouTube link
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_authors');
    }
};
