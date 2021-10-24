@extends('MasterPage')

@section('content')

<a class="btn btn-primary" href="{{route('salaries.index')}}">retour</a>

<form action="{{route('salaries.update',$salarie->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="row">
    <div class="col-6">
        <div><h2>informations personnels:</h2> </div>
        <div class="form-group">
            <label for="">Nom</label> <input type="text" name="nom" class="form-control" value="{{$salarie->nom}}">
            @error('nom')

                    <strong>
                        {{ $message }}
                    </strong>

            @enderror
            <br>
            <label for="">Prenom</label> <input type="text" name="prenom" class="form-control" value="{{$salarie->prenom}}">
            @error('prenom')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Cin</label> <input type="text" name="cin" class="form-control"value="{{$salarie->cin}}">
            @error('cin')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Sex</label>
            {{-- <input type="text" name="sex" class="form-control" value="{{$salarie->sex}}"> --}}
            <select name="sex" class="form-control">
                <option value="homme">homme</option>
                <option value="femme">femme</option>
            </select>
            @error('sex')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Age</label> <input type="text" name="age" class="form-control"value="{{$salarie->age}}">
            @error('age')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Situation familliale</label>
            {{-- <input type="text" name="situation_familialle" class="form-control"value="{{$salarie->situation_familialle}}"> --}}
            <select name="situation_familialle" class="form-control">
                <option value="célibataire">célibataire</option>
                <option value="marie">marie</option>
            </select>
            @error('situation_familialle')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Nbre Enfant</label>
            {{-- <input type="text"  name="nbre_enfant" class="form-control"value="{{$salarie->nbre_enfant}}"> --}}
            <select name="nbre_enfant" class="form-control">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
            @error('nbre_enfant')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Image</label>
            {{-- <input type="text" name="image" class="form-control"value="{{$salarie->image}}"> --}}
            <input type="file" name="image" class="form-control">
            @error('image')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
        </div>
    </div>

    <div class="col-6">
        <div><h2>informations Administratives:</h2> </div>
        <div class="form-group">
            <label for="">Departement</label>
            {{-- <input type="text" name="departement" class="form-control"value="{{$salarie->departement}}"> --}}
            <select name="departement" class="form-control">
                <option value="Déveleppement">Déveleppement</option>
                <option value="Conception">Conception</option>
                <option value="RH">RH</option>
            </select>
            @error('departement')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Mission</label>
            {{-- <input type="text" name="mission" class="form-control" value="{{$salarie->mission}}"> --}}
            <select name="mission" class="form-control">
                <option value="Développeur">Développeur</option>
                <option value="Concepteur">Concepteur</option>
                <option value="RH salarie">RH salarie</option>
            </select>
            @error('mission')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Date d'entrée</label> <input type="date" name="date_entree" class="form-control"value="{{$salarie->date_entree}}">
            @error('date_entree')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Salaire Initiale</label> <input type="text" name="salaire_initial" class="form-control"value="{{$salarie->salaire_initial}}">
            @error('salaire_initial')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Salaire Actuel</label> <input type="text" name="salaire_actuel" class="form-control"value="{{$salarie->salaire_actuel}}">
            @error('salaire_actuel')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div><h2>Cotisations:</h2> </div>
        <div class="form-group">
            <label for="">Num Cnss</label> <input type="text" name="num_cnss" class="form-control"value="{{$salarie->num_cnss}}">
            @error('num_cnss')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Num Amo</label> <input type="text" name="num_amo" class="form-control"value="{{$salarie->num_amo}}">
            @error('num_amo')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Num Cimr</label> <input type="text" name="num_cimr" class="form-control"value="{{$salarie->num_cimr}}">
            @error('num_cimr')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
        </div>
    </div>

    <div class="col-6">
        <div><h2>Localisation:</h2> </div>
        <div class="form-group">
            <label for="">Ville</label> <input type="text" name="ville" class="form-control"value="{{$salarie->ville}}">
            @error('ville')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Adresse</label> <input type="text" name="adresse" class="form-control"value="{{$salarie->adresse}}">
            @error('adresse')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
        </div>
    </div>

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-success mb-5"> Modifier</button>
    </div>
</div>

</form>

<style>
    :root{
    --main-bg-color:#009d63;
    --main-text-color:#009d63;
    --second-text-color:#bbbec5;
    --second-bg-color:#c1efde;
}
.primary-text{
    color: var(--main-text-color);
}
.second-text{
    color:var(--second-text-color)  ;
}
.primary-bg{
    background-color:  --main-bg-color;
}
.second-bg{
   background-color:--second-bg-color ;
}


#wrapper{
    overflow-x: hidden;
    background-image: linear-gradient( to right, #fffbd5, #b20a2c);
    /* background-image: linear-gradient( to right, #fc4a1a, #f7b733); */
     /* background-image: linear-gradient( to right, #74ebd5,  #ACB6E5); */
    /* background-image: linear-gradient( to right, #F2994A, #F2C94C); */
    /* background-image: linear-gradient( to right, #ff7e5f, #feb47b); */
    /* background-image: url("mybd4.jpg"); */
    /* background-size: cover; */
}

#sidebar-wrapper{
    min-height: 100vh;
    /* margin-left: -18rem; */
    transform: margin 0.25s ease-out;
}
#sidebar-wrapper .sidebar-heading{
    padding:0.875rem 1.25rem;
    font-size:1.2rem;
}
#sidebar-wrapper .list-group{
    width: 15rem;
}
#page-content-wrapper{
    min-width: 100vw;
}
#wripper.toggled #sidebar-wripper{
    margin-left: 0;
}
#menu-toggle{
    cursor: pointer;
}
.dropdown-menu{
    margin-left: 900px;
}
.list-group-item{
    border: none;
    padding: 20px 30px;
}
list-group-item.active{
    background-color: transparent;
    color: var(--main-text-color);
    font-weight: bold;
    border: none;
}
@media(min-width:768px){
    #sidebar-wripper{
        margin-left: 0;
    }
    #page-content-wrapper{
        min-width: 0;
        width: 100%;
    }
    #wripper.toggled #sidebar-wrapper{
        margin-left: -15rem;
    }
}

#logout{
    color: black;
}

</style>

@endsection
