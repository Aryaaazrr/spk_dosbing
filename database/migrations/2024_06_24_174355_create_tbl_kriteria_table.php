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
        Schema::create('tbl_kriteria', function (Blueprint $table) {
            $table->uuid('id_kriteria')->primary();
            $table->string('kode_kriteria')->unique();
            $table->uuid('id_aspek');
            $table->foreign('id_aspek')
                  ->references('id_aspek')
                  ->on('tbl_aspek')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->string('kriteria_name')->unique();
            $table->string('keterangan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_kriteria');
    }
};