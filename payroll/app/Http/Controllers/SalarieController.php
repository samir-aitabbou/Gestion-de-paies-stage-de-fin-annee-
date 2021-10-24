<?php

namespace App\Http\Controllers;

use App\Models\Salarie;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;


class SalarieController extends Controller
{
    public $salarie;
    public function __construct()
    {
        $this->salarie=  new Salarie;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries= Salarie::all();
        return view('salaries.index',compact('salaries'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salaries.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>['required'],
            'prenom'=>['required'],
            'cin'=>['required'],
            'num_cnss'=>['required'],
            'num_amo'=>['required'],
            'num_cimr'=>['required'],
            'sex'=>['required'],
            'age'=>'required|integer|min:20|max:100',
            'ville'=>['required'],
            'adresse'=>['required'],
            'image'=>['required'],
            'situation_familialle'=>['required'],
            'nbre_enfant'=>'required|integer',
            'departement'=>['required'],
            'mission'=>['required'],
            'date_entree'=>['required'],
            'salaire_initial'=>'required|integer',
            'salaire_actuel'=>'required|integer',
        ]);

        $newImageName = time().'-'.$request->nom.'.'.$request->image->Extension();

       $request->file('image')->storeAs('public/salaries_images',$newImageName);
        $this->salarie->nom=$request->input('nom');
        $this->salarie->prenom=$request->input('prenom');
        $this->salarie->cin=$request->input('cin');
        $this->salarie->num_cnss=$request->input('num_cnss');
        $this->salarie->num_amo=$request->input('num_amo');
        $this->salarie->num_cimr=$request->input('num_cimr');
        $this->salarie->sex=$request->input('sex');
        $this->salarie->age=$request->input('age');
        $this->salarie->ville=$request->input('ville');
        $this->salarie->adresse=$request->input('adresse');
        $this->salarie->image=$newImageName;
        $this->salarie->situation_familialle=$request->input('situation_familialle');
        $this->salarie->nbre_enfant=$request->input('nbre_enfant');
        $this->salarie->departement=$request->input('departement');
        $this->salarie->mission=$request->input('mission');
        $this->salarie->date_entree=$request->input('date_entree');
        $this->salarie->salaire_initial=$request->input('salaire_initial');
        $this->salarie->salaire_actuel=$request->input('salaire_actuel');

        $this->salarie->save();
        return redirect()->route('salaries.index')->with('success','le salarie a été bien ajouter');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salarie = Salarie::findOrFail($id);
        return view('salaries.liste_salarie',compact('salarie'));
    }

    public function showAll()
    {
        $salaries = Salarie::all();
        return view('salaries.All_salaries',compact('salaries'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salarie = Salarie::find($id);
        return view('salaries.modifier',compact('salarie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nom'=>['required'],
            'prenom'=>['required'],
            'cin'=>['required'],
            'num_cnss'=>['required'],
            'num_amo'=>['required'],
            'num_cimr'=>['required'],
            'sex'=>['required'],
            'age'=>['required'],
            'ville'=>['required'],
            'adresse'=>['required'],
            'image'=>['required'],
            'situation_familialle'=>['required'],
            'nbre_enfant'=>['required'],
            'departement'=>['required'],
            'mission'=>['required'],
            'date_entree'=>['required'],
            'salaire_initial'=>['required'],
            'salaire_actuel'=>['required'],
        ]);


        $newImageName = time().'-'.$request->nom.'.'.$request->image->Extension();
        $request->file('image')->storeAs('public/salaries_images',$newImageName);
        $request->image=$newImageName;

        $nom=$request->nom;
        $prenom=$request->prenom;
        $cin=$request->cin;
        $num_cnss=$request->num_cnss;
        $num_amo=$request->num_amo;
        $num_cimr=$request->num_cimr;
        $sex=$request->sex;
        $age=$request->age;
        $ville=$request->ville;
        $adresse=$request->adresse;
        $image=$newImageName;
        $situation_familialle=$request->situation_familialle;
        $nbre_enfant=$request->nbre_enfant;
        $departement=$request->departement;
        $mission=$request->mission;
        $date_entree=$request->date_entree;
        $salaire_initial=$request->salaire_initial;
        $salaire_actuel=$request->salaire_actuel;

        $salarie = Salarie::find($id);
        $salarie->update([
            'nom'=>$nom,
            'prenom'=>$prenom,
            'cin'=>$cin,
            'num_cnss'=>$num_cnss,
            'num_amo'=>$num_amo,
            'num_cimr'=>$num_cimr,
            'sex'=>$sex,
            'age'=>$age,
            'ville'=>$ville,
            'adresse'=>$adresse,
            'image'=>$newImageName,
            'situation_familialle'=>$situation_familialle,
            'nbre_enfant'=>$nbre_enfant,
            'departement'=>$departement,
            'mission'=>$mission,
            'date_entree'=>$date_entree,
            'salaire_initial'=>$salaire_initial,
            'salaire_actuel'=>$salaire_actuel,
        ]);
        return redirect()->route('salaries.index')->with('update','le salarie a été bien modifier');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salarie = Salarie::find($id);
        $salarie->delete();
        return redirect()->route('salaries.index')->with('delete','le salarie a été bien supprimer');

    }
}
