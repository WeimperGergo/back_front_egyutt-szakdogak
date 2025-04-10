<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class szakdoga extends Model
{
    protected $fillable = [
        'szakdoga_nev',
        'githublink',
        'oldallink',
        'tagokneve',
    ];
}
