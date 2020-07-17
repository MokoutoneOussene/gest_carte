@extends('include/head')

<div class="container">
<form action=" {{url('filliere/ajouter')}}" method="post">
     @csrf
        <div class="form-row">
            <div class="form-group col-md-11">
                <label for="inputEmail4">Filliere</label>
                <input type="text" name="filliere" class="form-control" id="inputnom" required>
            </div>

            <div class="form-group col-md-11">
                <label for="inputEmail4">UFR</label>
                <select id="" name="Ufr_id" class="form-control">
                    @foreach($ufrs as $ufr)
                    <option value="{{$ufr->id}}">{{$ufr->ufr}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <button class="btn btn-info" id="coleur" type="submit">Valider</button>
        <button class="btn btn-danger" id="coleur" type="reset">Annuler</button>
</form>
</div>
