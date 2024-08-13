<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaTecnica_Diretor extends Model
{
    use HasFactory;
    protected $fillable = ['Diretor_id', 'FichaTecnica_idFichaTecnica'];
    public function diretor(){
        return $this->belongsTo('App\Models\Diretor');
    }
    public function fichaTecnica(){
        return $this->belongsTo('App\Models\FichaTecnica');
    }
}
