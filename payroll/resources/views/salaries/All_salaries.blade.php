
@extends('MasterPage')

@section('content')
<div class="input-group mb-3 recherche">
    <input type="text" class="form-control" placeholder="Recheche" aria-label="Recipient's username" aria-describedby="button-addon2">
    <button class="btn btn-success " type="button" id="button-addon2">chercher</button>
</div>

@foreach ($salaries as $salarie)
<table class="table" id="t00">
    <thead class="thead-dark" >
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Cin</th>
        <th scope="col">Sex</th>
        <th scope="col">Age</th>
        <th scope="col">situation_familialle</th>
        <th scope="col">Nbr_Enfant</th>
        <th scope="col">Image</th>
        <th scope="col">Departement</th>
        <th scope="col">Mission</th>
        <th scope="col">DAte_entrée</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <th scope="col">{{$salarie->id}}</th>
        <td>{{$salarie->nom}}</td>
        <td>{{$salarie->prenom}}</td>
        <td >{{$salarie->cin}}</td>
        <td >{{$salarie->sex}}</td>
        <td >{{$salarie->age}}</td>
        <td >{{$salarie->situation_familialle}}</td>
        <td >{{$salarie->nbre_enfant}}</td>
        <td ><img src="{{ asset('storage/salaries_images/'.$salarie->image) }}" class="photo"></img></td>
        <td >{{$salarie->departement}}</td>
        <td >{{$salarie->mission}}</td>
        <td >{{$salarie->date_entree}}</td>
    </tbody>
</table>

<table class="table tab2" id="t01">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Salaire_Initial</th>
        <th scope="col">Salaire_Actuel</th>
        <th scope="col">Num_Cnss</th>
        <th scope="col">Num_Amo</th>
        <th scope="col">Num_Cimr</th>
        <th scope="col">Ville</th>
        <th scope="col">Adresse</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td >{{$salarie->salaire_initial}}</td>
        <td >{{$salarie->salaire_actuel}}</td>
        <td >{{$salarie->num_cnss}}</td>
        <td >{{$salarie->num_amo}}</td>
        <td >{{$salarie->num_cimr}}</td>
        <td >{{$salarie->ville}}</td>
        <td >{{$salarie->adresse}}</td>
      </tr>
    </tbody>
</table>
<hr>
@endforeach
<style>
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
#t01 {
  width: 100%;
  background-color: rgb(223, 223, 223);
}
#t00 {
  width: 100%;
  background-color: rgb(223, 223, 223);

}
.recherche{
    width: 400px;
    float: right;
}
.photo
{
    width: 180px;
    height: 180px;
    margin-left: 80px;

}
</style>
@endsection


