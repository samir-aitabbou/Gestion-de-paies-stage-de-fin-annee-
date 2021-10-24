@extends('MasterPage')

@section('content')
<div class="titre"><h3>Primes</h3></div><hr class="hr">

<form action="" method="GET">
    <div class="input-group mb-3">
      <input type="text" name="chercher_nom" class="form-control" placeholder="Nom du salarie...">
      <button class="btn btn-primary" type="submit">chercher</button>
    </div>
</form>


<table class="table" style="background: rgb(223, 223, 223)">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Departement</th>
            <th>Mission</th>
            <th>Action</th>
    </thead>
    <tbody>
        @foreach ($salaries as $salarie)
            <tr>
                <td>{{$salarie->id}}</td>
                <td>{{$salarie->nom}}</td>
                <td>{{$salarie->prenom}}</td>
                <td>{{$salarie->departement}}</td>
                <td>{{$salarie->mission}}</td>
                <td><a href="/create_prime/{{$salarie->id}}" class="btn btn-info">Primes</a></td>
            </tr>
        @endforeach


    </tbody>
</table>







<style>
    .titre{
        text-align: center;
        color: white;
    }
    .hr{
        color: bisque;
    }
    .input-group{
        width: 500px;
        float: right;
    }
</style>
@endsection
