<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Primes extends Model
{
    use HasFactory;

    protected $table = 'primes';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id_salarie',
        'date',
        'montant'
    ];


    public function Salarie(){
        return $this->belongsTo(Salarie::class);
    }
}

?>
