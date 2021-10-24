<?php

use App\Http\Controllers\DepencesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalaireController;
use App\Http\Controllers\SalarieController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\PrimeController;
use App\Http\Controllers\statistiquesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;



// <!--salaries-->
Route::resource('salaries',SalarieController::class)
->missing(function (Request $request)
{
    return Redirect::route('salaries.index');
});

Route::get('/liste_salarie',function(){
    return view('salaries/liste_salarie');
});

Route::get('/All_salaries',[SalarieController::class,'showAll']);

// <!--abscences-->
Route::get('/marquer_abscence',[PresenceController::class,'index'])->name('marquer_abscence');
Route::get('/liste_presence',[PresenceController::class,'show'])->name('liste_presence');
Route::post('/store',[PresenceController::class,'store']);
Route::get('/filtrer_abscence', [PresenceController::class,'filtre'])->name("filtrer_abscence");

// <!--Depences-->
Route::get('/depences_par_année', [DepencesController::class,'index'])->name('depences_par_année');
Route::get('/depence_annuelles', [DepencesController::class,'depence_annuelles'])->name('depence_annuelles');
Route::get('/depences_par_mois/{id}',[DepencesController::class,'show'])->name('depences_par_mois');
Route::get('/marquer_depences',[DepencesController::class,'create']);
Route::post('/store_depences',[DepencesController::class,'store'])->name('store_depences');
Route::get('/filtrer_depences/{id}',[DepencesController::class,'filtrer_depences'])->name('filtrer_depences');
Route::get('/filtrer_depences_A_modifier/{id}',[DepencesController::class,'filtrer_depences_A_modifier'])->name('filtrer_depences_A_modifier');
Route::post('/update_depences/{id_salarie}/{date_depence}',[DepencesController::class,'update'])->name('update_depences');
Route::get('/edit_depences/{id}',[DepencesController::class,'edit'])->name('edit_depences');


// <!--salaire-->
Route::get('/salaire',[SalaireController::class,'index']);
Route::get('/Bulletin_Paie_Par_Salarie/{id}',[SalaireController::class,'show'])->name('Bulletin_Paie_Par_Salarie');
Route::get('/filtrer_Bulletin_Paie_Par_Date/{id}',[SalaireController::class,'filtrer_Bulletin_Paie_Par_Date'])->name('filtrer_Bulletin_Paie_Par_Date');


// <!--Primes-->
Route::get('/primes',[PrimeController::class,'index']);
Route::get('/create_prime/{id}',[PrimeController::class,'create']);
Route::post('/stote_prime',[PrimeController::class,'store'])->name('stote_prime');

// <!--homepage-->{}
Route::get('/', [HomeController::class,'index']);

// <!--statistiques-->{}
Route::get('/statistiques',[statistiquesController::class,'index']);

?>
