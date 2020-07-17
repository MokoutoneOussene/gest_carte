@extends('include/head')

<div class="row d-flex">
    <div class="col-10">
    <img src="{{asset('image/GestCarte.png')}}" class="img-logo">
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
        <body class="team">
   <div class="team_top text-center"><h1 class="mb-2">LISTE</h1></div>
            <!-- 2nd row -->
    @foreach ($etudiants as $etude)
             <div class="row" style="display:inline-flex; width:auto">
                <div class="col-6"  style=" max-width:inherit; margin-left:30px;">
                    <div class="member text-center">
                        <div class="img">
                            <img src="{{asset('storage').'/'.$etude->photo}}" class="img-fluid" alt="">
                        </div>
                        <div class="m_text">
                            <h3>{{$etude->nom}}</h3>
                            <h3>{{$etude->prenom}}</h3>
                            <h5>{{$etude->Ufr}}</h5>
                            <p>Née à:{{$etude->lieu_naiss}}</p>
                            <p>Email:{{$etude->email}}</p>
                            <p>Telephone:{{$etude->telephone}}</p>
                        </div>

                        <div class="m_menu">
                              <ul class="list-inline">
                              <li class="list-inline-item"><a href="{{ url('Etudiant/carte') }}"><i class="fa fa-user">Card</i></a></li>
                              <li class="list-inline-item"><a href="{{ url('editer-etudiant/'.$etude->id) }}"><i class="fa fa-edit">Edit</i></a></li>
                              <li class="list-inline-item"><a href="{{ url('/'.$etude->id) }}"><i class="fa fa-trash">sup</i></a></li>
                            </ul>
                        </div>
                 </div>
             </div>
            </div>
</body>
@endforeach




        </div>
    </div>
