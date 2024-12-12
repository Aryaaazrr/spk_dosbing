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
        Schema::create('tbl_subkriteria', function (Blueprint $table) {
            $table->id('id_subkriteria');
            $table->unsignedBigInteger('id_kriteria');
            $table->foreign('id_kriteria')->references('id_kriteria')->on('tbl_kriteria')->onUpdate('cascade')->onDelete('cascade');
            $table->string('subkriteria_name');
            $table->float('nilai');
            $table->enum('factor', ['Core', 'Secondary']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_subkriteria');
    }
};