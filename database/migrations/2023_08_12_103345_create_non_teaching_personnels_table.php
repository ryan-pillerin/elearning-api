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
        Schema::create('non_teaching_personnels', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->integer('employees_id');
            $table->integer('access_level_id');
            $table->json('log');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('non_teaching_personnels');
    }
};
