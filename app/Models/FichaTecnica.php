<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaTecnica extends Model
{
    use HasFactory;
    protected $fillable = ['Titulo', 'Biografia', 'Ano', 'Duracao', 'Idioma', 'IMDB', 'Pais', 'Sinopse'];
    public function fichaTecnica_Ators(){
        return $this->hasMany('App\Models\FichaTecnica_Ator', 'FichaTecnica_idFichaTecnica');
    }
}