<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rezervacija;

class Sto extends Model
{
    use HasFactory;

    protected $fillable = [
        'brojMesta',
        'tip',
    ];

    public function rezervacije()
    {
        return $this->hasMany(Rezervacija::class);
    }
}
