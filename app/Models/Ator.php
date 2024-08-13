<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
    use HasFactory;
    protected $fillable = ['Nome', 'Biografia'];
    public function fichaTecnica_Ators(){
        return $this->hasMany('App\Models\FichaTecnica_Ator', 'Ator_id');
    }
}