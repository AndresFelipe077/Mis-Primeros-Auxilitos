<?php

namespace Database\Factories;

use App\Models\Registro;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registro>
 */
class RegistroFactory extends Factory
{

    protected $model = Registro::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'nombre'                => $this -> faker -> randomElement(['Andres','Felipe','Nicolas','Smith']),
            'correo'                => $this -> faker -> randomElement(['Andres@gmail.com','Felipe@gmail.com','Nicolas@gmail.com','Smith@gmail.com']),
            'genero'                => $this -> faker -> randomElement(['Masculino','Femenino']),
            'fechaNacimiento'       => $this -> faker -> randomElement(['12/12/2002','12/12/2012','12/12/2002','12/12/2002']),
            'contrasena'           => $this -> faker -> randomElement(['afsd7afy','asfd8aufas','39fhad','fa98dfua']),
            'confirmarContrasena' => $this -> faker -> randomElement(['afsd7afy','asfd8aufas','39fhad','fa98dfua'])


            /*
           'nombre'                => $this -> faker -> randomElement(['Andres','Felipe','Nicolas','Smith']),
            'correo'                => $this -> faker -> sentence(),
            'genero'                => $this -> faker -> sentence(),
            'fechaNacimiento'       => $this -> faker -> date(),
            'contrasena'            => $this -> faker -> password(),
            'confirmarContrasena'   => $this -> faker -> password()*/

        ];
    }
}
