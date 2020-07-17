<?php

namespace App\Http\Controllers;

use App\Etudient;
use App\Niveau;
use App\Filliere;
use App\Ufr;
use App\Nationalite;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function form(Etudient $produit)
    {
        $fac = Ufr::all();
        $nation = Nationalite::all();
        $niv = Niveau::all();
        $fill = Filliere::all();
        return view('Etudiant/forme', ['facs'=>$fac, 'nations'=>$nation, 'niveaux'=>$niv, 'fills'=>$fill]);
    }

    public function liste()
    {
        $etud = Etudient::all();
        return view('Etudiant/list',['etudiants'=>$etud]);
    }

    public function carte()
    {
        $etud = Etudient::all();
        return view('Etudiant/carte',['etudiants'=>$etud]);
    }


    function store($id=null, Request $request)
    {
        if($id){
        $etud=Etudient::find($id);
        $etud->Niveau_id=$request->Niveau_id;
        $etud->Filliere_id=$request->Filliere_id;
        $etud->Nationalite_id=$request->Nationalite_id;
        $etud->Ufr_id=$request->Ufr_id;

        $etud->nom=$request->nom;
        $etud->prenom=$request->prenom;
        $etud->date_naiss=$request->date_naiss;
        $etud->lieu_naiss=$request->lieu_naiss;
        $etud->sexe=$request->sexe;
        $etud->email=$request->email;
        $etud->telephone=$request->telephone;
        $etud->photo=$request->photo->store('photos','public');
        $etud->save();
        return redirect('Etudiant/formulaire');
        }
        else{
            Etudient::create([
                'Niveau_id'=>$request->Niveau_id,
                'Filliere_id'=>$request->Filliere_id,
                'Nationalite_id'=>$request->Nationalite_id,
                'Ufr_id'=>$request->Ufr_id,

                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'date_naiss'=>$request->date_naiss,
                'lieu_naiss'=>$request->lieu_naiss,
                'sexe'=>$request->sexe,
                'email'=>$request->email,
                'telephone'=>$request->telephone,
                'photo'=>$request->photo->store('photos','public')
            ]);
            return redirect('etudiant/formulaire');
        }

        // $etud = new Etudient();

        // $etud->Niveau_id=$request->Niveau_id;
        // $etud->Filliere_id=$request->Filliere_id;
        // $etud->Nationalite_id=$request->Nationalite_id;
        // $etud->Ufr_id=$request->Ufr_id;

        // $etud->nom=$request->nom;
        // $etud->prenom=$request->prenom;
        // $etud->date_naiss=$request->date_naiss;
        // $etud->lieu_naiss=$request->lieu_naiss;
        // $etud->sexe=$request->sexe;
        // $etud->email=$request->email;
        // $etud->telephone=$request->telephone;
        // $etud->photo=$request->photo->store('photos','public');
        // $etud->save();
        // return redirect('etudiant/formulaire');

    }


    function delete($id){
        $etud=Etudient::find($id);
        $etud->delete();
        return redirect('etudient/list');
    }
}
