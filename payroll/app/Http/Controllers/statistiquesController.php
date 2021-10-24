<?php

namespace App\Http\Controllers;

use App\Models\Salarie;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\DB;

class statistiquesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries_Hommes = Salarie::where('sex','homme')->count();
        $salaries_Femmes = Salarie::where('sex','femme')->count();

        $marie =Salarie::where('situation_familialle','marie')->count();
        $célibataire =Salarie::where('situation_familialle','célibataire')->count();

        $déveleppement =Salarie::where('departement','développement')->count();
        $conception =Salarie::where('departement','conception')->count();
        $RH =Salarie::where('departement','ressources humains')->count();

        $villes=DB::select(DB::raw("SELECT   COUNT(ville) AS nbr_salaries, ville FROM     salaries GROUP BY ville"));
        $data="";
        foreach ($villes as $ville)
        {
            $data.="['" .$ville->ville. "'," .$ville->nbr_salaries. "],";
        }
        $salariea_par_villes = $data;
        return view('statistique/statistiques',compact('salaries_Hommes',
                                                       'salaries_Femmes',
                                                       'marie',
                                                       'célibataire',
                                                       'déveleppement',
                                                       'conception',
                                                       'RH',
                                                       'salariea_par_villes'
                                                    ));
    }


}
