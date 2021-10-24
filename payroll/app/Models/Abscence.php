<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abscence extends Model
{
    use HasFactory;
    protected $table = 'abscences';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_salarie',
        'date_actuelle',
        'abscence',
        'heures_supplémentaire',
        'conge_medical',

    ];

    public function Salarie()
    {
        return $this->belongsTo(Salarie::class);
    }
}

?>
