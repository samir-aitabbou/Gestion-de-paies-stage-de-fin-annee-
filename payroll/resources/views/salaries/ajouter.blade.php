@extends('MasterPage')

@section('content')

<a class="btn btn-primary" href="{{route('salaries.index')}}">retour</a>

<form action="{{route('salaries.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row">
    <div class="col-6">
        <div><h2>informations personnels:</h2> </div>
        <div class="form-group">
            <label for="">Nom</label> <input type="text" name="nom" class="form-control" >
            @error('nom')

                    <strong>
                        {{ $message }}
                    </strong>

            @enderror
            <br>
            <label for="">Prenom</label> <input type="text" name="prenom" class="form-control">
            @error('prenom')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Cin</label> <input type="text" name="cin" class="form-control">
            @error('cin')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Sex</label>
            {{-- <input type="text" name="sex" class="form-control"> --}}
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
            <label for="">Age</label> <input type="text" name="age" class="form-control">
            @error('age')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Situation familliale</label>
            {{-- <input type="text" name="situation_familialle" class="form-control"> --}}
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
            {{-- <input type="text"  name="nbre_enfant" class="form-control"> --}}
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
            {{-- <input type="text" name="departement" class="form-control"> --}}
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
            {{-- <input type="text" name="mission" class="form-control"> --}}
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
            <label for="">Date d'entrée</label> <input type="date" name="date_entree" class="form-control">
            @error('date_entree')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Salaire Initiale</label> <input type="text" name="salaire_initial" class="form-control">
            @error('salaire_initial')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Salaire Actuel</label> <input type="text" name="salaire_actuel" class="form-control">
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
            <label for="">Num Cnss</label> <input type="text" name="num_cnss" class="form-control">
            @error('num_cnss')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Num Amo</label> <input type="text" name="num_amo" class="form-control">
            @error('num_amo')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Num Cimr</label> <input type="text" name="num_cimr" class="form-control">
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
            <label for="">Ville</label> <input type="text" name="ville" class="form-control">
            @error('ville')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
            <label for="">Adresse</label> <input type="text" name="adresse" class="form-control">
            @error('adresse')

            <strong>
                {{ $message }}
            </strong>

            @enderror
            <br>
        </div>
    </div>

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary"> Enregistrer</button>
    </div>
</div>



</form>

<style>
    body
    {
        color: white;
    }
    h2
    {
        color: yellow;
    }
</style>
@endsection
