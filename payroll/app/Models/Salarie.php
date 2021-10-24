<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salarie extends Model
{
    use HasFactory;
    protected $table = 'salaries';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nom',
        'prenom',
        'cin',
        'num_cnss',
        'num_amo',
        'num_cimr',
        'sex',
        'age',
        'ville',
        'adresse',
        'image',
        'situation_familialle',
        'nbre_enfant',
        'departement',
        'mission',
        'date_entree',
        'salaire_initial',
        'salaire_actuel',
    ];

    public function Abscence()
    {
        return $this->hasMany(Abscence::class,"id_salarie");
    }

    public function Depence()
    {
        return $this->hasMany(Depence::class);
    }

    public function Primes()
    {
        return $this->hasMany(Primes::class);
    }

    public function Salaire()
    {
        return $this->hasMany(Salaire::class);
    }

    // presence

    public function  Absence_Par_Date($date)
    {
        $Abscence =  Abscence::where('id_salarie',$this->id)
                             ->where('date_actuelle',$date)->first();
        // if(is_null($absence)) return "";
        return  $Abscence->abscence??"";
    }

    public function Heure_Sup_Par_Date($date)
    {
        $Heure_Sup = Abscence::where('id_salarie',$this->id)
                             ->where('date_actuelle',$date)->first();

         return  $Heure_Sup->heures_supplémentaire??"";
    }

    public function Conge_Medical_Par_Date($date)
    {
        $Conge_Medical = Abscence::where('id_salarie',$this->id)
                                 ->where('date_actuelle',$date)->first();

         return  $Conge_Medical->conge_medical??"";
    }

    // depences
    public function Salaire_Par_Date($date_from,$date_to)
    {
        $total_salaire=0;
        $depences= Depence::whereBetween('date', [$date_from, $date_to])
               ->where('id_salarie',$this->id)->where('motif','salaire')->get();

        foreach ($depences as $depence) {
            $total_salaire+=$depence->montant;
        }

        return $total_salaire??"";
    }

    public function Cnss_Par_Date($date_from,$date_to)
    {
        $total_cnss=0;
        $depences= Depence::whereBetween('date', [$date_from, $date_to])
               ->where('id_salarie',$this->id)->where('motif','cnss')->get();

        foreach ($depences as $depence) {
            $total_cnss+=$depence->montant;
        }

        return $total_cnss??"";
    }

    public function Amo_Par_Date($date_from,$date_to)
    {
        $total_amo=0;
        $depences= Depence::whereBetween('date', [$date_from, $date_to])
               ->where('id_salarie',$this->id)->where('motif','amo')->get();

        foreach ($depences as $depence) {
            $total_amo+=$depence->montant;
        }

        return $total_amo??"";
    }

    public function Cimr_Par_Date($date_from,$date_to)
    {
        $total_cimr=0;
        $depences= Depence::whereBetween('date', [$date_from, $date_to])
               ->where('id_salarie',$this->id)->where('motif','cimr')->get();

        foreach ($depences as $depence) {
            $total_cimr+=$depence->montant;
        }

        return $total_cimr??"";
    }

    public function Primes_Par_Date($date_from,$date_to)
    {
        $total_primes=0;
        $depences= Depence::whereBetween('date', [$date_from, $date_to])
        ->where('id_salarie',$this->id)->where('motif','prime')->get();


        foreach ($depences as $depence) {
            $total_primes+=$depence->montant;
        }

        return $total_primes??"";
    }

    public function Montant_Nbre_Enfants_Par_Date($date_from,$date_to)
    {
        $total_montant_nbre_enfants=0;
        $depences= Depence::whereBetween('date', [$date_from, $date_to])
        ->where('id_salarie',$this->id)->where('motif','montant_nbre_enfants')->get();


        foreach ($depences as $depence) {
            $total_montant_nbre_enfants+=$depence->montant;
        }

        return $total_montant_nbre_enfants??"";
    }

}

?>
