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
//         project_title
// project_picture ( mean project picture )
// short_description
// demo_link
// video_link
// code_link
// project_category
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->text('project_title')->nullable();
            $table->string('project_picture')->nullable();
            $table->text('short_description')->nullable();
            $table->text('demo_link')->nullable();
            $table->text('video_link')->nullable();
            $table->text('code_link')->nullable();
            $table->longText('project_category')->nullable();
            $table->string('project_serial')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
