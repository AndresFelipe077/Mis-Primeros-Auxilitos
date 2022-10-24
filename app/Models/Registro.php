<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $table = "registros";
    protected $fillable = [
        'name',
        'imagen',
        'email',
        'genero',
        'fechaNacimiento',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    //Encriptar contraseña
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function name(): Attribute
    {
        return new Attribute(
            get:fn($value) => ucwords($value), //
            set:fn($value) => strtolower($value)
        );
        
    }


}
