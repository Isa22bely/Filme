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
       Schema::create('ficha_tecnicas', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('Titulo');
           $table->integer('Ano');
           $table->integer('Duracao');
           $table->string('Idioma');
           $table->string('IMDB');
           $table->string('Pais');
           $table->string('Sinopse');
           $table->unsignedBigInteger('claisificacao_indicativas_id');
            $table->foreign('claisificacao_indicativas_id')->references('id')->on('claisificacao_indicativas');
           $table->timestamps();
       });
   }


   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
       Schema::dropIfExists('ficha_tecnicas');
   }
};

