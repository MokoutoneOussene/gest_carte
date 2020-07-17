@extends('include/head')

<body class="team">
 <div class="container-fluid">
    <!-- <h5 class="mellare">CARTE D'ETUDIANT</h5> -->
    <div class="row ">
        <div class="col-md-5 team2">
            <!-- <div class="panel panel-default bordure-de-la-carte shadow m-3 p-3 le-background-color"> -->
            <h4 class="text-center le-titre-de-la-carte">Université Nazi Boni de Bobo</h4><hr>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 ">
                            <img src="{{asset('pictures/ID.jpg')}}" class="img-responsive l-image-de-la-carte">
                        </div>
                        <div class="col-md-9 le-contenu-de-la-carte">
                            <p class="espace-entre-le-contenu-de-la-carte">Nom: Zagre</p>
                            <p class="espace-entre-le-contenu-de-la-carte">Prenom: Tegwende Romarique Christiant</p>
                            <p class="espace-entre-le-contenu-de-la-carte">Date de naissance: 26/10/1998</p>
                            <p class="espace-entre-le-contenu-de-la-carte">Matricule: 0099P</p>
                            <p class="espace-entre-le-contenu-de-la-carte">Statut: Non Boursier</p><hr>
                            <button class="btn btn-primary btn-xs"><i class="fa fa-print" aria-hidden="true"></i> Imprimer</button>
                            <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</button>
                            <button type="button" class="btn btn-danger "data-dismiss="modal"> <a class="text-light" href="{{url('etudiant/list')}}">Retour</a> </button>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
        </div>
</div>

<!-- Le modal pour le formulaire d'envoie -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header entete-du-modal">
        <h5 class="modal-title le-titre-du-modale" id="exampleModalLabel">Envoyer un message à</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Destinataires:</label>
            <input type="text" class="form-control background-des-champs" id="recipient-name" placeholder="exemple@gmail.com">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Objet:</label>
            <input type="text" class="form-control background-des-champs" id="recipient-name" placeholder="objet...">
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control background-des-champs" id="message-text" placeholder="votre message..."></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer entete-du-modal">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary">Envoyer</button>
      </div>
    </div>
  </div>
</div>
</body>

