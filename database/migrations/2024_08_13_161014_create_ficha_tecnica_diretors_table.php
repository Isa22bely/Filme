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
        Schema::create('ficha_tecnica_diretors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('FichaTecnica_idFichaTecnica');
            $table->unsignedBigInteger('Diretor_id');
            $table->foreign('FichaTecnica_idFichaTecnica')->references('id')->on('ficha_tecnicas');
            $table->foreign('Diretor_id')->references('id')->on('diretors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ficha_tecnica_diretors');
    }
};
