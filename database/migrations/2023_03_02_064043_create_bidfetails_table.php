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
        Schema::create('bidfetails', function (Blueprint $table) {
            $table->id();
            $table->string('nameset');
            $table->string('name');
            $table->string('nomer');
            $table->string('barang_id');
            $table->string('bid_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidfetails');
    }
};
