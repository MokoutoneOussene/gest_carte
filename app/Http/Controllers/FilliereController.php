<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filliere;
use App\Ufr;

class FilliereController extends Controller
{
    public function form(Filliere $filliere)
    {
        $ufr = Ufr::all();
        return view('Filliere/forme',['ufrs'=>$ufr]);
    }

    public function liste()
    {
        $fill = Filliere::all();
        return view('Filliere/list',['fillieres'=>$fill]);
    }

    function store(Request $request)
    {
        $fill=new Filliere();
        $fill->filliere=$request->filliere;
        $fill->Ufr_id=$request->Ufr_id;
        $fill->save();
        return redirect('filliere/formulaire');
    }

    function delete($id){
        $fill=Filliere::find($id);
        $fill->delete();
        return redirect('Filliere/list');
    }
}
