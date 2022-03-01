<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approvision extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'produit_id',
        'fournisseur_id',
        'quantite',
        'prix',
        'devise',
        'dateprovision',
    ];
}
