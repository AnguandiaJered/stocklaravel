<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perteproduit extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'produit_id',
        'quantite',
        'dateperte',
        'typegaspillage',
    ];
}
