<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    public function Etudiant()
    {
        return $this->hasOne(Etudient::class);
    }
}
