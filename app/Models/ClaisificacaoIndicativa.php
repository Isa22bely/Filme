<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaisificacaoIndicativa extends Model
{
    use HasFactory;
    protected $fillable = [ 'Titulo', 'Descricao'];

    public function ficha_tecnicas(){
        return $this->hasMany('App\Models\FichaTecnica', 'FichaTecnica_idFichaTecnica');
    }
}
