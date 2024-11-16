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
        Schema::create('tbl_setting', function (Blueprint $table) {
            $table->uuid('id_setting')->primary();
            $table->string('key')->nullable();
            $table->string('locale', 10)->nullable();
            $table->text('value')->nullable();
            $table->text('additional_value')->nullable();
            $table->json('json_value')->nullable();
            $table->json('additional_json_value')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_setting');
    }
};
