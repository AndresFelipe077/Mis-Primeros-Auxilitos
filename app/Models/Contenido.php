<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    use HasFactory;

    // protected $table = "contenidos"; En caso de que palabras en plural sean diferentes a su singular
    //Lo encuentra mas directamente

    protected $fillable = [
        'title',
        'file',
        'description',
    ];

}
