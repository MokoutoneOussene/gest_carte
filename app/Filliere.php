<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filliere extends Model
{
    public function Etudiant()
    {
        return $this->hasOne(Etudient::class);
    }

    public function Ufr()
    {
        return $this->belongsTo(Ufr::class);
    }
}
