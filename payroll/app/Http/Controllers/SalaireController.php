<?php

namespace App\Http\Controllers;

use App\Models\Salarie;
use App\Models\Abscence;
use App\Models\Depence;
use App\Models\Primes;
use Illuminate\Http\Request;

class SalaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries = Salarie::all();
        return view('salaires.Bulletin_Paie',compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salarie = Salarie::find($id);

        return view('salaires/Bulletin_Paie_Par_Salarie',compact('salarie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function filtrer_Bulletin_Paie_Par_Date(Request $request ,$id)
    {
        $date_from = $request->date_from;
        $date_to = $request->date_to;

        $salarie  = Salarie::where('id',$id)->get()->first();
        $montant_nbre_enfants = $salarie->nbre_enfant * 200;

        $abscence = count(Abscence::whereBetween('date_actuelle', [$date_from, $date_to])->where('id_salarie',$id)->where('conge_medical','Non')->get());
        $montant_abscence = $abscence * ($salarie->salaire_actuel / 26);

        $depence_cnss = Depence::where('date',$date_from)->where('id_salarie',$id)->where('motif','cnss')->get()->first();
        $cotisation_cnss = $depence_cnss->montant;
        if(is_null($cotisation_cnss)) {$cotisation_cnss=0;};

        $depence_amo=0;
        $depence_amo = Depence::where('date',$date_from)->where('id_salarie',$id)->where('motif','amo')->get()->first();
        $cotisation_amo = $depence_amo->montant;
        if(is_null($cotisation_amo)) {$cotisation_amo=0;};

        $depence_cimr=0;
        $depence_cimr = Depence::where('date',$date_from)->where('id_salarie',$id)->where('motif','cimr')->get()->first();
        $cotisation_cimr = $depence_cimr->montant;
        if(is_null($cotisation_cimr)) {$cotisation_cimr=0;};

        $primes_montant=0;
        $primes   = Primes::where('date',$date_from)->where('id_salarie',$id)->get()->first();
        $primes_montant =  $primes->montant;
        if(is_null($primes_montant)) {$primes_montant=0;};

        $heures_sup_montant=0;
        $heures_sup   = Abscence::whereBetween('date_actuelle', [$date_from, $date_to])->where('id_salarie',$id)->get()->first();
        $heures_sup_montant =  $heures_sup->heures_supplémentaire* ($salarie->salaire_actuel / 26*8);
        if(is_null($heures_sup_montant)) {$heures_sup_montant=0;};

        $salaire_net=0;
        $salaire_net = ($salarie->salaire_actuel)+$montant_nbre_enfants+$primes_montant-$montant_abscence+$heures_sup_montant;

        $salaire_brute=0;
        $salaire_brute = $salaire_net+$cotisation_cnss+$cotisation_amo+$cotisation_cimr+$heures_sup_montant;
        // dd($salaire_net);
        return view('salaires/Bulletin_Paie_Par_Salarie_filtrée',['montant_abscence'=>$montant_abscence,
                                                          'cotisation_cnss'=>$cotisation_cnss,
                                                          'cotisation_amo'=>$cotisation_amo,
                                                          'cotisation_cimr'=>$cotisation_cimr,
                                                          'primes_montant'=>$primes_montant,
                                                          'salarie'=>$salarie,
                                                          'montant_nbre_enfants'=>$montant_nbre_enfants,
                                                          'salaire_net'=>$salaire_net,
                                                          'salaire_brute'=>$salaire_brute,
                                                          'heures_sup_montant'=>$heures_sup_montant
                                                        ]);

    }
}
