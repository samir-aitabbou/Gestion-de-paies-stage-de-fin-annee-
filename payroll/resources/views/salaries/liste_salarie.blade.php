@extends('MasterPage')

@section('content')
<a class="btn btn-primary mb-3" href="{{route('salaries.index')}}"><i class="fas fa-reply"></i>retour</a>
<form action="{{route('salaries.destroy',$salarie->id)  }}" method="POST">
    <div style="float: right">
        <a class="btn btn-warning" href="{{route('salaries.edit',$salarie->id)}}">Modifier</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" >Supprimer</button>

    </div>

</form>
<br>
<strong>informations personnels:</strong>

    <table class="table" style="background: rgb(223, 223, 223)">
        <thead class="thead-dark">
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
            {{-- <td >   <img src="{{ asset('../storage/salaries_images/'.$salarie->image) }}" alt="">   </td> --}}
            <td ><img src="{{ asset('storage/salaries_images/'.$salarie->image) }}" class="photo"></img>  </td>
            <td> </td>
        </tr>
        </tbody>
    </table>
    <br>
    <strong>informations administratives:</strong>
    <table class="table" style="background: rgb(223, 223, 223)">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Departement</th>
            <th scope="col">Mission</th>
            <th scope="col">DAte_entrée</th>
            <th scope="col">Salaire_Initial</th>
            <th scope="col">Salaire_Actuel</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td >{{$salarie->departement}}</td>
            <td >{{$salarie->mission}}</td>
            <td >{{$salarie->date_entree}}</td>
            <td >{{$salarie->salaire_initial}}</td>
            <td >{{$salarie->salaire_actuel}}</td>
          </tr>

        </tbody>
    </table>
    <br>

    <strong>cotisations:</strong>
    <table class="table" style="background: rgb(223, 223, 223)">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Num_Cnss</th>
            <th scope="col">Num_Amo</th>
            <th scope="col">Num_Cimr</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td >{{$salarie->num_cnss}}</td>
            <td >{{$salarie->num_amo}}</td>
            <td >{{$salarie->num_cimr}}</td>
          </tr>

        </tbody>
    </table>
    <br>

    <strong>localisation:</strong>
    <table class="table" style="background: rgb(223, 223, 223)">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Ville</th>
            <th scope="col">Adresse</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td >{{$salarie->ville}}</td>
            <td >{{$salarie->adresse}}</td>
        </tr>

        </tbody>
    </table>

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
        strong
        {
            color: yellow;
        }
        .photo
        {
            width: 180px;
            height: 180px;
            margin-left: 80px;

        }
    </style>

@endsection
