@extends('MasterPage')

@section('content')


<form action="/store" method="POST">
    @csrf
    {{-- {{ method_field('POST') }} --}}
        <table class="table" style="background: rgb(223, 223, 223)">
        <thead class="thead-dark">
            <tr>
                <th>Id_Salarie</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Departement</th>
                <th>Present/absent</th>
                <th>heures supplimentaires</th>
                <th>Congé Medical</th>
        </thead>
        <tbody>
            @forelse ($salaries as $salarie)

        <tr>
            <td> <input type="text" value="{{$salarie->id}}" name="id_salarie[]"  readonly>  </td>
            <td >{{$salarie->nom}}</td>
            <td>{{$salarie->prenom}}</td>
            <td>{{$salarie->departement}}</td>
            <td>
                <select class="form-select"  name="abscence[]">
                    <option value="Present" selected>Present</option>
                    <option value="Abscent">Abscent</option>
                </select>
            </td>
            <td>
                <select class="form-select" name="heures_supplémentaire[]">
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </td>
            <td>
                <select class="form-select"  name="conge_medical[]">
                    <option value="Non" selected>Non</option>
                    <option value="oui">Oui</option>

                </select>
            </td>
        </tr>
        @empty
                <div class="alert alert-warning">
                    pas de salaries !
                </div>
        @endforelse ($salaries as $salarie)
        </tbody>
    </table>

    <div>
        <h4 style="color: yellow">Date Actuelle</h4>
    </div>
    <div class="date">
        <input type="date" class="form-control" id="Aujourdhui" readonly name="date_actuelle">
        <script>
            document.getElementById("Aujourdhui").valueAsDate = new Date();
        </script>
    </div>

    <div id="button" >
        <button class="btn btn-success" type="submit">Noter</button>
    </div>
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
    .date{
        width: 300px;
    }
    #button
    {
        /* margin-left:500px; */
        text-align: center;
    }

</style>
@endsection
