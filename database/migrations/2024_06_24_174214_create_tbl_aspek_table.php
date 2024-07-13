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
        Schema::create('tbl_aspek', function (Blueprint $table) {
            $table->id('id_aspek');
            $table->string('kode_aspek')->unique();
            $table->string('aspek_name')->unique();
            $table->float('persentase', 3, 2);
            $table->enum('factor', ['Core', 'Secondary']);
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
        Schema::dropIfExists('tbl_aspek');
    }
};