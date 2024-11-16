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
        Schema::create('tbl_profile', function (Blueprint $table) {
            $table->uuid('id_profile')->primary();
            $table->uuid('id_alternatif');
            $table->foreign('id_alternatif')->references('id_alternatif')->on('tbl_alternatif')->onUpdate('cascade')->onDelete('cascade');
            $table->uuid('id_kriteria');
            $table->foreign('id_kriteria')->references('id_kriteria')->on('tbl_kriteria')->onUpdate('cascade')->onDelete('cascade');
            $table->uuid('id_subkriteria');
            $table->foreign('id_subkriteria')->references('id_subkriteria')->on('tbl_subkriteria')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_profile');
    }
};