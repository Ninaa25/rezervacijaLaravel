<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gost;
use App\Models\Sto;

class Rezervacija extends Model
{
    use HasFactory;

    protected $fillable = [
        'datumRezervacije',
        'gost_id',
        'tipRezervacije',
        'sto_id',
    ];

    public function gost()
    {
        return $this->belongsTo(Gost::class);
    }

    public function sto()
    {
        return $this->belongsTo(Sto::class);
    }
}
