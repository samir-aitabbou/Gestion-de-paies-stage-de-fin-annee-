@extends('MasterPage')
@section('content')


<a class="btn btn-primary mb-3" href="/primes"><i class="fas fa-reply"></i>retour</a>
<div class="row">

    <div class="col-12">
        <form action="" method="GET">
            <div class="input-group mb-3">
                <h4>Période: </h4>
            <input type="date" name="chercher_nom" class="form-control" placeholder="Nom du salarie...">
            <button class="btn btn-primary" type="submit">chercher</button>
            </div>
        </form>
    </div>
</div>

@if (session('success'))
<h6 class="alert alert-success">{{ session('success') }}</h6>
@endif

<form action="{{Route('stote_prime')}}" method="POST">
    <table class="table" style="background: rgb(223, 223, 223)">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Departement</th>
                <th>Mission</th>
                <th>Ajouter Prime (MAD)</th>
                <th>Date</th>
        </thead>
        <tbody>
                <tr>
                    <td><input type="text" name="id_salarie" id="" value="{{$salarie->id}}" readonly> </td>
                    <td>{{$salarie->nom}}</td>
                    <td>{{$salarie->prenom}}</td>
                    <td>{{$salarie->departement}}</td>
                    <td>{{$salarie->mission}}</td>
                    <td><input type="text" name="montant"></td>
                    <td><input type="date" name="date"></td>
                </tr>

        </tbody>
    </table>

    <button class="btn btn-success botona" type="submit">Ajouter</button>

</form>


    <style>
        .input-group{
               width: 500px;
               float: right;
           }
        h4{
            margin-right: 20px;
            margin-top: 5px;
            margin-left: 20px;
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
        .botona{
            margin-left: 450px;
            margin-top: 20px;
        }
    </style>
@endsection
