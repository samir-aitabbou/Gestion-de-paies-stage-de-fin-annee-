<?php

namespace App\Http\Controllers;
use App\Models\Salarie;
use App\Models\Abscence;
use Carbon\Carbon;
use Illuminate\Http\Request;


class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries= Salarie::all();
        return view('presences.noter_presence',compact('salaries'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $id_salarie            = $request->id_salarie;
            $date_actuelle         = $request->date_actuelle;
            $abscence              = $request->abscence;
            $heures_supplémentaire = $request->heures_supplémentaire;
            $conge_medical         = $request->conge_medical;

            $dataSave =  [];
            for ($i=0; $i <count($id_salarie) ; $i++) {
                $dataSave[]=[
                    'id_salarie'            =>$id_salarie[$i],
                    'date_actuelle'         =>$date_actuelle,
                    'abscence'              =>$abscence[$i],
                    'heures_supplémentaire' =>$heures_supplémentaire[$i],
                    'conge_medical'         =>$conge_medical[$i],
                ];
            }
            Abscence::insert($dataSave);

        return redirect()->route('liste_presence')->with('success','la liste d\'abscence a été bien enregistrer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $salaries= Salarie::all();

        foreach ($salaries as $salarie)
        {
            $salarie['abscence']= $salarie->Absence_Par_Date(Carbon::today());
            $salarie['heures_supplimentaires']=$salarie->Heure_Sup_Par_Date(Carbon::today());
            $salarie['conge_medical']=$salarie->Conge_Medical_Par_Date(Carbon::today());
        }

        return view('presences.liste_presence',compact(['salaries']));
    }



    public function filtre(Request $request)
    {
        $date = $request->date;
        $salaries= Salarie::whereHas("Abscence",function($q) use($date)
        {
            $q->where('date_actuelle',$date);
        })->get();

        foreach ($salaries as $salarie)
        {
            $salarie['abscence']= $salarie->Absence_Par_Date($request->date);
            $salarie['heures_supplimentaires']=$salarie->Heure_Sup_Par_Date($request->date);
            $salarie['conge_medical']=$salarie->Conge_Medical_Par_Date($request->date);
        }

        return view('presences.liste_presence',compact(['salaries']));

    }

    public function filtre_Par_Nom(Request $request)
    {}
}
