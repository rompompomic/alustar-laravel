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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('cover_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->string('year')->nullable();
            $table->string('area')->nullable();
            
            // Translatable fields
            $table->string('title_lv')->nullable();
            $table->string('title_ru')->nullable();
            
            $table->string('location_lv')->nullable();
            $table->string('location_ru')->nullable();
            
            $table->string('type_lv')->nullable();
            $table->string('type_ru')->nullable();
            
            $table->text('content_lv')->nullable();
            $table->text('content_ru')->nullable();
            
            $table->string('seo_title_lv')->nullable();
            $table->string('seo_title_ru')->nullable();
            
            $table->text('seo_description_lv')->nullable();
            $table->text('seo_description_ru')->nullable();
            
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
