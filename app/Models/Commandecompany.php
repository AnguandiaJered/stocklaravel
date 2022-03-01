<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandecompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'fournisseur_id',
        'produit_id',
        'quantite',
        'prix',
        'devise',
        'datecmd',
    ];
}
