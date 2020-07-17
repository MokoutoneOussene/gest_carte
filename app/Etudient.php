<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudient extends Model
{
    protected $guarded=[];
    
    public function Niveau()
    {
        return $this->belongsTo(Niveau::class);
    }

    public function Filliere()
    {
        return $this->belongsTo(Filliere::class);
    }

    public function Ufr()
    {
        return $this->belongsTo(Ufr::class);
    }

    public function Nationalite()
    {
        return $this->belongsTo(Nationalite::class);
    }
}
