<?php

namespace App\Http\Controllers;

use App\Nationalite;
use Illuminate\Http\Request;


class NationaliteController extends Controller
{
    public function form(Nationalite $nationalite)
    {
        return view('Nationalite/forme');
    }

    public function liste()
    {
        $nation = Nationalite::all();
        return view('Nationalite/list',['nations'=>$nation]);
    }

    function store(Request $request)
    {
        $natio=new Nationalite();
        $natio->nationalite=$request->nationalite;
        $natio->save();
        return redirect('nationalite/formulaire');
    }

    function delete($id){
        $natio=Nationalite::find($id);
        $natio->delete();
        return redirect('Nationalite/list');
    }
}
