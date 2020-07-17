@extends('include/head')

<div class="container">
 <h1 class="armelle">LISTE DES NIVEAUX</h1>

<table class="table table-striped custab table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nationalité</th>
        </tr>
    </thead>
           @foreach($niveaux as $niveau)
            <tr>
                <td>{{$niveau->id}}</td>
                <td>{{$niveau->niveau}}</td>
            </tr>
            @endforeach
</table>
</div>