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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('tag_1_lv')->nullable();
            $table->string('tag_1_ru')->nullable();
            $table->string('tag_2_lv')->nullable();
            $table->string('tag_2_ru')->nullable();
            $table->string('tag_3_lv')->nullable();
            $table->string('tag_3_ru')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([
                'tag_1_lv', 'tag_1_ru',
                'tag_2_lv', 'tag_2_ru',
                'tag_3_lv', 'tag_3_ru'
            ]);
        });
    }
};
