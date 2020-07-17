@extends('include/head')

<div class="container">
 <h1 class="armelle">LISTE DES UFR</h1>

<table class="table table-striped custab table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom UFR</th>
        </tr>
    </thead>
           @foreach($facs as $fac)
            <tr>
                <td>{{$fac->id}}</td>
                <td>{{$fac->ufr}}</td>
            </tr>
            @endforeach
</table>
</div>
