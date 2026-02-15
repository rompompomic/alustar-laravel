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
            $table->string('team_lv')->nullable();
            $table->string('team_ru')->nullable();

            $table->text('challenge_lv')->nullable();
            $table->text('challenge_ru')->nullable();

            $table->text('solution_lv')->nullable();
            $table->text('solution_ru')->nullable();
            
            $table->text('result_lv')->nullable();
            $table->text('result_ru')->nullable();

            $table->json('achievements')->nullable();
            $table->json('scope')->nullable();
            $table->json('technologies')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([
                'team_lv', 'team_ru',
                'challenge_lv', 'challenge_ru',
                'solution_lv', 'solution_ru',
                'result_lv', 'result_ru',
                'achievements', 'scope', 'technologies'
            ]);
        });
    }
};
