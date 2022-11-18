<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use App\SocialProfile;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'provider_id',
        'avatar',
        'genero',
        'fechaNacimiento',
        'password',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
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


    // //Relaciones uno a muchos
    // public function socialProfiles()
    // {
    //     return $this->hasMany(SocialProfile::class);
    // }

    //imagen del admin
    public function adminlte_image()
    {
        return 'https://picsum.photos/300/300';
    }

    //rol
    public function adminlte_desc()
    {
        return 'Super Admin';
    }

    //perfil
    public function adminlte_profile_url()
    {
        return 'profile/username';
    }


}
