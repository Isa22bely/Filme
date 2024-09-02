<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $fillable = [ 'Avaliacao', 'Descricao'];

    public function ficha_tecnicas(){
        return $this->hasMany('App\Models\FichaTecnica', 'FichaTecnica_idFichaTecnica');
    }
}
