@extends('include/head')

<div class="container">
<form action=" {{url('nationalite/ajouter')}}" method="post">
     @csrf
        <div class="form-row">
            <div class="form-group col-md-11">
                <label for="inputEmail4">Nationalite</label>
                <input type="text" name="nationalite" class="form-control" id="inputnom" required>
            </div>
        </div>

        <button class="btn btn-info" id="coleur" type="submit">Valider</button>
        <button class="btn btn-danger" id="coleur" type="reset">Annuler</button>
</form>
</div>