<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationalite extends Model
{
    public function Etudiant()
    {
        return $this->hasOne(Etudient::class);
    }

}
