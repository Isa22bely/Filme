<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaTecnica_Ator extends Model
{
    use HasFactory;
    protected $fillable = ['Ator_id', 'FichaTecnica_idFichaTecnica'];
    public function ator(){
        return $this->belongsTo('App\Models\Ator');
    }
    public function fichaTecnica(){
        return $this->belongsTo('App\Models\FichaTecnica');
    }
}
