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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('id_prefix');
            $table->BigInteger('users_id');
            $table->json('name')->default('{"firstname": "", "lastname": "", "middlename": ""}');
            $table->date('birthdate');
            $table->json('address')->nullable()->default('{"street":"", "barangay": "", "city":"", "province":"", "postalcode":""}');
            $table->json('contacts')->nullable()->default('{"email: "", "mobile": ""})');
            $table->BigInteger('access_level_id');
            $table->json('log')->default('{"created_by":"", "updated_by":""}');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
