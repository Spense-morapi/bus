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
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name',40)->nullable();
            $table->string('middle_name',40)->nullable();
            $table->string('last_name',40)->nullable();
            $table->string('gender')->nullable();
            $table->string('mobile')->nullable();
            $table->string('marital_status')->nullable();
            $table->unsignedBigInteger('business_id')->nullable();
            $table->foreign('business_id')->references('id')->on('businesses')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('middle_name');
            $table->dropColumn('last_name');
            $table->dropColumn('gender');
            $table->dropColumn('mobile');
            $table->dropColumn('marital_status');
        });
    }
};
