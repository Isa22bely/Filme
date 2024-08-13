<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diretor extends Model
{
    use HasFactory;
    protected $fillable =  ['Nome', 'Biografia'];
    public function fichaTecnica_Diretors(){
      return $this->hasMany('App\Models\FichaTecnica_Diretor', 'Diretor_id');
    }
}