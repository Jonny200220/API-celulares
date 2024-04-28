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
        Schema::create('celulars', function (Blueprint $table) {
            $table->string('no_serie', 60)->primary();
            $table->string('sistema_operativo', 40);
            $table->string('ram', 60);
            $table->string('procesador', 20);
            $table->unsignedBigInteger('marca_id');
            $table->string('color', 40);
            $table->timestamps();

            $table->foreign('marca_id')->references('id')->on('marcas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('celulars');
    }
};
