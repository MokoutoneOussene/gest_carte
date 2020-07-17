<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ufr extends Model
{
    public function Etudiant()
    {
        return $this->hasOne(Etudient::class);
    }

    public function Filliere()
    {
        return $this->hasOne(Filliere::class);
    }
}
