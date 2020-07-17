<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ufr;

class UfrController extends Controller
{
    public function form(Ufr $ufr)
    {
        return view('UFR/forme');
    }

    public function liste()
    {
        $fac = Ufr::all();
        return view('UFR/list',['facs'=>$fac]);
    }

    function store(Request $request)
    {
        $natio=new Ufr();
        $natio->ufr=$request->ufr;
        $natio->save();
        return redirect('ufr/formulaire');
    }

    function delete($id){
        $ufr=Ufr::find($id);
        $ufr->delete();
        return redirect('ufr/list');
    }
}
