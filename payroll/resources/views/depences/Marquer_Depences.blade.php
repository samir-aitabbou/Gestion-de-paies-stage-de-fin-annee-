@extends('MasterPage')
@section('content')
<div class="row">
    <div class="col-12">
        <a class="btn btn-primary mb-3" href="/depences_par_année"><i class="fas fa-reply"></i>retour</a>
    </div>
</div>

<form action="{{Route('store_depences')}}" method="POST">

    <table class="table" style="background: rgb(223, 223, 223)">
        <thead class="thead-dark">
            <tr>
                <th>Id_Salarie</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>developpement</th>
                <th>Motif</th>
                <th>Montant</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
             @foreach ($salaries as $salarie)
                <tr>
                    <td><input type="text" name="id_salarie[]" value="{{$salarie->id}}"  readonly> </td>
                    <td>{{$salarie->prenom}}</td>
                    <td>{{$salarie->nom}}</td>
                    <td>{{$salarie->departement}}</td>
                    <td><input type="text" name="motif[]" value="salaire"  readonly> </td>
                    <td><input type="text" name="montant[]" id=""value="{{$salarie->salaire_actuel}}" ></td>
                    <td><input type="date" name="date[]" class="date" value="<?= date('Y-m-d', time()); ?>"></td>
                </tr>
                {{-- <tr>
                    <td><input type="text" name="id_salarie[]" value="{{$salarie->id}}"  readonly> </td>
                    <td>{{$salarie->prenom}}</td>
                    <td>{{$salarie->nom}}</td>
                    <td>{{$salarie->departement}}</td>
                    <td><input type="text" name="motif[]" value="heures_spplémentaires"  readonly> </td>
                    <td><input type="text" name="montant[]" id=""value="0" ></td>
                    <td><input type="date" name="date[]" class="date" value="<?= date('Y-m-d', time()); ?>"></td>
                </tr> --}}
                <tr>
                    <td><input type="text" name="id_salarie[]" value="{{$salarie->id}}" aria-readonly=""> </td>
                    <td>{{$salarie->prenom}}</td>
                    <td>{{$salarie->nom}}</td>
                    <td>{{$salarie->departement}}</td>
                    <td><input type="text" name="motif[]" value="cnss" readonly></td>
                    <td><input type="text" name="montant[]" id=""value="{{$salarie->salaire_actuel *0.048}}"></td>
                    <td><input type="date" name="date[]" class="date" value="<?= date('Y-m-d', time()); ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="id_salarie[]" value="{{$salarie->id}}" aria-readonly=""> </td>
                    <td>{{$salarie->prenom}}</td>
                    <td>{{$salarie->nom}}</td>
                    <td>{{$salarie->departement}}</td>
                    <td><input type="text" name="motif[]" value="amo" readonly></td>
                    <td><input type="text" name="montant[]" id=""value="{{$salarie->salaire_actuel *0.0226}}"></td>
                    <td><input type="date" name="date[]" class="date" value="<?= date('Y-m-d', time()); ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="id_salarie[]" value="{{$salarie->id}}" aria-readonly=""> </td>
                    <td>{{$salarie->prenom}}</td>
                    <td>{{$salarie->nom}}</td>
                    <td>{{$salarie->departement}}</td>
                    <td><input type="text" name="motif[]" value="cimr" readonly></td>
                    <td><input type="text" name="montant[]" id=""value="{{$salarie->salaire_actuel *0.06}}"></td>
                    <td><input type="date" name="date[]" class="date" value="<?= date('Y-m-d', time()); ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="id_salarie[]" value="{{$salarie->id}}" aria-readonly=""> </td>
                    <td>{{$salarie->prenom}}</td>
                    <td>{{$salarie->nom}}</td>
                    <td>{{$salarie->departement}}</td>
                    <td><input type="text" name="motif[]" value="prime" readonly></td>
                    <td><input type="text" name="montant[]" id=""value="0"></td>
                    <td><input type="date" name="date[]" class="date" value="<?= date('Y-m-d', time()); ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="id_salarie[]" value="{{$salarie->id}}" aria-readonly=""> </td>
                    <td>{{$salarie->prenom}}</td>
                    <td>{{$salarie->nom}}</td>
                    <td>{{$salarie->departement}}</td>
                    <td><input type="text" name="motif[]" value="montant_nbre_enfants" readonly></td>
                    <td><input type="text" name="montant[]" id=""value="{{$salarie->nbre_enfant*200}}"></td>
                    <td><input type="date" name="date[]" class="date" value="<?= date('Y-m-d', time()); ?>"></td>
                </tr>
                <tr ><td style="background: red"></td></tr>


            @endforeach
        </tbody>
    </table>
    <button class="btn btn-success enregistrer mb-5" type="submit" >Enregistrer</button>

</form>





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

    .enregistrer{
        margin-top: 20px;
        margin-left: 440px;
    }

@endsection
