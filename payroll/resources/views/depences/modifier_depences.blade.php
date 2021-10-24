@extends('MasterPage')

@section('content')
<div class="row">
    <div class="col-12">
        <a class="btn btn-primary mb-3" href="/depences_par_mois/{{$salarie->id}}"><i class="fas fa-reply"></i>retour</a>
    </div>
</div>

<div class="cordonnees">
    <h3>{{$salarie->nom}} <span style="color: yellow">|</span> {{$salarie->prenom}}</h3>
</div>

<form action="{{Route('filtrer_depences_A_modifier',$salarie->id)}}" method="GET">
    <div class="recherche">
        <div class="input-group mb-3 ">
            <input type="date" name="date" class="form-control" >
            <button class="btn btn-primary" type="submit" >chercher</button>
        </div>
    </div>
</form>

<h3 id="titre">Modifier les depences :</h3>

{{-- <form action="{{Route('update_depences',$salarie_id,$depence_date ) }}"  method="POST"> --}}
    <form action="/update_depences/{{$salarie->id}}/{{$depence_date}}"  method="POST">

    <table class="table" style="background: rgb(223, 223, 223)">
        <thead class="thead-dark">
            <tr>
                <th>Motif</th>
                <th>Montant (MAD) </th>
                <th >Date/mois</th>
        </thead>
        <tbody>
            @foreach ($depences as $depence)
                <tr>
                    <td><input type="text" name="motif[]" value="{{$depence->motif}}" readonly> </td>
                    <td><input type="text" name="montant[]" value=" {{$depence->montant}}"></td>
                    <td class="date"><input type="text" name="date" value="{{$depence->date}}" readonly> </td>
                </tr>
                <tr></tr>
            @endforeach

        </tbody>
    </table>

    <table class="table width" style="background: rgb(223, 223, 223)">
        <thead class="thead-dark">
            <tr >
                <th >Totale Depensé (MAD) </th>
            </tr>
        </thead>

        <tbody>

            <tr  >
                <td class="total"><span class="tot">{{$total_depences}}</span> </td>
            </tr>
        </tbody>
    </table>
    <button type="submit" class="btn btn-warning modifier"> Modifier</button>
</form>


<style>
    .cordonnees
    {
        text-align: center;
        margin-bottom: 20px;
        color: black;
        margin-right: 500px;
        margin-top: 20px;
    }
    .recherche
    {
        width: 500px;
        float: right;
    }

    table{
        margin-top: 30px;
    }
    .tab2{
            margin-bottom: 50px;
        }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
    }
    th {
        text-align: left;
    }

    .date{
        text-align: center;
    }

    .width{
        width: 341px;
        margin-top: -18px;
        margin-left: 340px;
    }
    h3{
        color: white;
    }
    .total
    {
        font-size: 30px;
    }
    .tot
    {
        background: wheat;
        border-radius: 10px;
    }
    #titre
    {
        color: white;
    }
    .modifier
    {
        margin-left: 400px;
        margin-bottom: 20px;
    }
    </style>





@endsection
