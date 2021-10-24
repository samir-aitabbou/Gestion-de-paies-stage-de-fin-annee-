@extends('MasterPage')
@section('content')


<a class="btn btn-primary mb-3" href="/salaire"><i class="fas fa-reply"></i>retour</a>
<div class="row">

    <div class="col-12">
        <form action="{{Route('filtrer_Bulletin_Paie_Par_Date',$salarie->id)}}" method="GET">
            <div class="input-group mb-3">
                {{-- <h4>Période: </h4> --}}
                <input type="date" name="date_from" class="form-control">
                <input type="date" name="date_to" class="form-control">
                <button class="btn btn-primary" type="submit">chercher</button>
            </div>
        </form>
    </div>

    <div class="col-6 bloc">
        <div><h4>Societe : <span class="info">SeoCom</span> </h4></div>
        <div><h4>N° CNSS : <span class="info">{{$salarie->num_cnss}}</span> </h4> </div>
    </div>

    <div class="col-6 bloc">
        <h4> Nom et Prénom :  <span class="info">{{$salarie->nom}}</span> | <span class="info">{{$salarie->prenom}}</span>  </h4>
    </div>

</div>

<table class="table" style="background: rgb(223, 223, 223)">
    <thead class="thead-dark">
        <tr>
            <th>Mission</th>
            <th>Situation familialle</th>
            {{-- <th>Date de naissance</th> --}}
            <th>Date d'embauche</th>
            <th>N° CIN</th>
    </thead>
    <tbody>
            <tr>
                <td><span class="info">{{$salarie->mission}}</span></td>
                <td><span class="info">{{$salarie->situation_familialle}}</span></td>
                {{-- <td><span class="info">{{$salarie->date_naissance}}</span></td> --}}
                <td><span class="info">{{$salarie->date_entree}}</span></td>
                <td><span class="info">{{$salarie->cin}}</span></td>
            </tr>
    </tbody>
</table>

<table class="table" style="background: rgb(223, 223, 223)">
    <thead class="thead-dark">
        <tr>
            <th>N° CNSS</th>
            <th>N° AMO</th>
            <th>N° CIMR</th>
            <th>Nbre D'enfants</th>
    </thead>
    <tbody>
            <tr>
                <td class="info">{{$salarie->num_cnss}}</td>
                <td class="info">{{$salarie->num_amo}}</td>
                <td class="info">{{$salarie->num_cimr}}</td>
                <td class="info">{{$salarie->nbre_enfant}}</td>
            </tr>
    </tbody>
</table>

<table class="table" style="background: rgb(223, 223, 223)">
    <thead class="thead-dark">
        <tr>
            <th>Libellé</th>
            <th>Valeur</th>
    </thead>
    <tbody>
            <tr>
                <td>Salaire De Base</td>
                <td></td>
            </tr>
            <tr>
                <td>Montant heures supplimentéres </td>
            </tr
            <tr>
                <td>Montant Jours Abscence</td>
                <td></td>
            </tr>
            <tr>
                <td>Cotisation CNSS</td>
                <td></td>
            </tr>
            <tr>
                <td>Cotisation AMO</td>
                <td></td>
            </tr>
            <tr>
                <td>Cotisation CIMR</td>
                <td></td>
            </tr>
            <tr>
                <td>Montant Pour Nbre D'enfants</td>
                <td></td>
            </tr>
            <tr>
                <td>Prime</td>
                <td></td>
            </tr>
            <tr>
                <td><span class="salaire_net">Salaire Net</span>  (aprés additions et restructions)</td>
                <td></td>
            </tr>
    </tbody>
</table>
<div class="salaire">
    <div class="row">
        <div class="col-6">
             <div> <h4>Salaire Brute : <span class="montant">0 <span class="mad">MAD</span> </span> </h4>  <div class="alert alert-success">ce que j'ai depence sur ce salarie !</div> </div>
        </div>
        <div class="col-6">
             <div> <h4>Salaire Net : <span class="montant">0 <span class="mad">MAD</span></span></h4> <div class="alert alert-warning">ce que le salarie a pris !</div></div>
        </div>
     </div>
</div>

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
     .bloc{
         border: solid 1px ;
         background-color:rgb(223, 223, 223);
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
        .salaire
        {
            background-color: white;
            border-radius: 3px;
            margin-bottom: 200px;
        }
        .alert{
            margin: 10px 20px;
        }
        .montant{
            border-radius:20px;
            background-color: rgb(185, 175, 175);
            color: red;
        }
        .mad{
            font-size: 12px;
        }
        .salaire_net
        {
            font-weight: bold;
        }
        .info
        {
            color: rgb(170, 111, 111);
            font-weight: bold;
        }
</style>
@endsection
