<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sortie extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'client_id',
        'produit_id',
        'quantite',
        'prix',
        'devise',
        'dateprovision',
    ];
}
