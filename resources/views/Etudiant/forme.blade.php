@extends('include/head')

<div class="row d-flex">
    <div class="col-10">
    <img src="picture/logo.png" class="img-logo">
    </div>
<div class="col">
    <button type="button" class="btn btn-primary">Se deconnecter</button>
</div>
<body class="adja">

    <div class="fd">

    <div class="goch-fd">
            <button type="button" class="btn btn-outline-light"> <a class="text-light" href="{{url('etudiant/list')}}">ETUDIANTS</a> </button>
            <button type="button" class="btn btn-outline-light"> <a class="text-light" href="{{url('filliere/list')}}">FILLIERES</a> </button>
            <button type="button" class="btn btn-outline-light"> <a class="text-light" href="{{url('niveau/list')}}">NIVEAUX</a> </button>
            <button type="button" class="btn btn-outline-light"> <a class="text-light" href="{{url('ufr/list')}}">UFR</a> </button>
            <button type="button" class="btn btn-outline-light"> <a class="text-light" href="{{url('nationalite/list')}}">NATIONALITES</a> </button>
    </div>

        <div>
                <p class="titre-fd">ENREGISTRER UN ETUDIANT</p>
        <form action="{{url('etudiant/ajouter')}}" method="POST" class="droite-fd" enctype="multipart/form-data">
        @csrf
            <div class="form-group row">
                <div class="col-sm-10">
                <select name="Ufr_id" class="form-control form-control-lg" id="colFormLabelLg">
                <option value="">Ufr</option>
                @foreach($facs as $faculte)
                <option value="{{$faculte->id}}">{{$faculte->ufr}}</option>
                @endforeach
                </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                <select name="Nationalite_id" class="form-control form-control-lg" id="colFormLabelLg">
                <option value="">Nationalite</option>
                @foreach($nations as $nation)
                <option value="{{$nation->id}}">{{$nation->nationalite}}</option>
                @endforeach
                </select>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-10">

                <select name="Niveau_id" class="form-control form-control-lg" id="colFormLabelLg">
                <option value="">Niveau</option>
                @foreach($niveaux as $niveau)
                <option value="{{$niveau->id}}">{{$niveau->niveau}}</option>
                @endforeach
                </select>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-10">
                <select name="Filliere_id" class="form-control form-control-lg" id="colFormLabelLg">
                <option value="">Filliere</option>
                @foreach($fills as $filliers)
                <option value="{{$filliers->id}}">{{$filliers->filliere}}</option>
                @endforeach
                </select>
                </div>
            </div>

            <div class="form-group row">

                <div class="col-sm-10">
                <input type="text" name="nom" class="form-control form-control-lg" placeholder="Nom">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <input type="text" name="prenom" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Prenom">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <input type="date" name="date_naiss" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Date de naissance">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <input type="text" name="lieu_naiss" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Lieu de naissance">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <input type="text" name="sexe" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Genre">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                <input type="mail" name="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <input type="text" name="telephone" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Telephone">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <input type="file" name="photo" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Photo">
                </div>
            </div>

                <button type="submit" class="btn btn-primary">Valider</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
    </form>

        </div>
    </div>
