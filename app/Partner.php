<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    //
    protected $fillable = [
        'Nom',
        'Adresse',
        'Type',
        'Matricule',
        'Email',
        'Telephone',
        'Image',
        'Marge',
    ];
}
