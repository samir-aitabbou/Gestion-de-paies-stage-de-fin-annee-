<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depence extends Model
{
    use HasFactory;
    protected $table = 'depences';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_salarie',
        'montant',
        'motif',
        'date'
    ];

    public function Salarie(){
        return $this->belongsTo(Salarie::class);
    }



}

?>
