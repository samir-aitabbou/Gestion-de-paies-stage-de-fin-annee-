@extends('MasterPage')

@section('content')
<div class="row">
    <div class="col-6">
        <div class="mb-3">
                <a href="/marquer_depences" class="btn btn-success">Nouvelle Depence</a>
        </div>
    </div>

    <form action="{{Route('depence_annuelles')}}" method="GET">
        <div class="col-6 recherche">
            <div class="from_to">Date_from------------->Date_to :</div>
            <div class="input-group mb-3 ">

                <input type="date" name="date_from" class="form-control" >
                <input type="date" name="date_to" class="form-control" >
                <button class="btn btn-primary" type="submit">chercher</button>
            </div>
        </div>
    </form>


</div>
<h3>Depences par année :</h3>
<table class="table" style="background: rgb(223, 223, 223)">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Salaire (MAD)</th>
            <th>montant heures supplimentaires (MAD)</th>
            <th>Totale CNSS (MAD)</th>
            <th>Totale AMO (MAD)</th>
            <th>Totale CIMR (MAD)</th>
            <th>Totale primes (MAD)</th>
            <th>Totale montants sur nbre d'enfants (MAD)</th>
            <th>Details</th>

    </thead>
    <tbody>
        @foreach ($salaries as $salarie)
              <tr>
                <td>{{ $salarie->id}}</td>
                <td>{{ $salarie->nom}}</td>
                <td>{{ $salarie->prenom}}</td>
                <td>{{ $salarie->total_salaire}}</td>
                <td>{{ $salarie->total_salaire}}</td>
                <td>{{ $salarie->total_cnss}}</td>
                <td>{{ $salarie->total_amo}}</td>
                <td>{{ $salarie->total_cimr}}</td>
                <td>{{ $salarie->total_primes}}</td>
                <td>{{ $salarie->total_montant_nbre_enfants}}</td>
                <td><a class="btn btn-info btn_sm" href="{{Route('depences_par_mois',$salarie->id) }}"> <span style="color:black"><i class="fa fa-folder-open" aria-hidden="true">Details<span class="spinner-grow spinner-grow-sm"></span></i></span> </a></td>
            </tr>
        @endforeach

    </tbody>
</table>

<div class="row">
    <div class="col-4 totale">
        <h4>Totale Depencé Cette Année: <div class="cercle"><div class="total_style">{{$totale_par_année}} <span class="black">MAD</span> </div> </div> </h4>
    </div>

</div>


<style>
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
    .recherche{
        float: right;
    }
    .from_to
    {
        font-weight: bold;
        font-size: 20px;
        color: yellow;

    }
    .totale
    {
        margin-left: 300px;
        margin-top: 30px;
    }

    .cercle
    {
        border: solid 1px rgb(116, 116, 116);
        border-radius: 50%;
        width: 300px;
        height: 100px;
        background: rgb(206, 206, 206);
        text-align: center;
        margin-left: 10px;
        margin-top: 20px;
    }
    .total_style
    {
        margin-top: 30px;
        color: rgb(141, 1, 1);
        font-size: 35px;
    }
    .black
    {
        color: black;
        font-size: 15px
    }
    h4,h3
    {
        color: white;
    }

</style>

@endsection
