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
        Schema::create('ficha_tecnica__ators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('FichaTecnica_idFichaTecnica');
             $table->unsignedBigInteger('Ator_id');
             $table->foreign('FichaTecnica_idFichaTecnica')->references('id')->on('ficha_tecnicas');
             $table->foreign('Ator_id')->references('id')->on('ators');
             $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ficha_tecnica__ators');
    }
};
