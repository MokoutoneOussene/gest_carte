<?php

namespace App\Http\Controllers;


use App\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    public function form(Niveau $niveau)
    {
        return view('Niveau/forme');
    }

    public function liste()
    {
        $niv = Niveau::all();
        return view('Niveau/list',['niveaux'=>$niv]);
    }

    function store(Request $request)
    {
        $niv=new Niveau();
        $niv->niveau=$request->niveau;
        $niv->save();
        return redirect('niveau/formulaire');
    }

    function delete($id){
        $niv=Niveau::find($id);
        $niv->delete();
        return redirect('Niveau/list');
    }

}
