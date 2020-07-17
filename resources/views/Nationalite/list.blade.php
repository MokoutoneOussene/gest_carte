@extends('include/head')

<div class="container">
 <h1 class="armelle">LISTE DES NATIONALITES</h1>

<table class="table table-striped custab table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nationalité</th>
        </tr>
    </thead>
           @foreach($nations as $nation)
            <tr>
                <td>{{$nation->id}}</td>
                <td>{{$nation->nationalite}}</td>
            </tr>
            @endforeach
</table>
</div>