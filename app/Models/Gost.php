<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rezervacija;

class Gost extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'brojTelefona',
    ];

    public function rezervacije()
    {
        return $this->hasMany(Rezervacija::class);
    }
}
