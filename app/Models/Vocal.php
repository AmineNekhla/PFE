<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vocal extends Model
{
    use HasFactory;

    protected $table = 'vocal'; // Le nom de la table doit correspondre à celui défini dans la migration

    protected $fillable = [
        'fichier'
    ];
}
