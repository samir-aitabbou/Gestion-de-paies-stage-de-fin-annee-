@extends('MasterPage')

@section('content')

<a class="btn btn-success mb-5" href="{{route('salaries.create')}}"> Ajouter un salarie</a>

@if(session('success'))
<div class="alert alert-success ">
    {{session('success')}}
</div>
@endif

@if(session('update'))
<div class="alert alert-warning ">
    {{session('update')}}
</div>
@endif

@if(session('delete'))
<div class="alert alert-danger ">
    {{session('delete')}}
</div>
@endif

@forelse ($salaries as $salarie)

<br><table class="table" style="background: rgb(223, 223, 223)">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Cin</th>
        <th scope="col">Sex</th>
        <th scope="col">Age</th>
        <th scope="col">Departement</th>
        <th scope="col">Mission</th>
        <th scope="col">Image</th>
        <th scope="col">Options</th>

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
        <td >{{$salarie->departement}}</td>
        <td >{{$salarie->mission}}</td>
        <td >{{$salarie->image}}</td>
        <td >
            <form action="{{route('salaries.destroy',$salarie->id)  }}" method="POST" onsubmit="return confirm('Etes vous sur que vous voulez supprimer ce salarie ?');">

                <a class="btn btn-info" href="{{route('salaries.show',$salarie->id)}}">Voir Plus</a>
                <a class="btn btn-warning" href="{{route('salaries.edit',$salarie->id)}}">Modifier</a>

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" >Supprimer</button>

            </form>


        </td>
      </tr>
    </tbody>
</table>

@empty
    <div class="alert alert-warning ">
        pas de salaries ! .
    </div>
@endforelse ($salaries as $salarie)



@endsection
