@extends('include/head')

<div class="container">
 <h1 class="armelle">LISTE DES FILIERES</h1>

<table class="table table-striped custab table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nationalité</th>
            <th>UFR</th>
        </tr>
    </thead>
           @foreach($fillieres as $fill)
            <tr>
                <td>{{$fill->id}}</td>
                <td>{{$fill->filliere}}</td>
                <td>{{$fill->Ufr_id}}</td>
            </tr>
            @endforeach
</table>
</div>