<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apoderado extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function matriculas(){
        return $this->hasMany(Matricula::class);
    }
    
}
