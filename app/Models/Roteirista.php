<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roteirista extends Model
{
    use HasFactory;
    protected $fillable =  ['Nome', 'Biografia'];
    public function fichaTecnica_Roteiristas(){
      return $this->hasMany('App\Models\FichaTecnica_Roteirista', 'Roteirista_id');
    }
}
