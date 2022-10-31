<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'name'              => fake()-> name(),
            'email'             => fake()-> unique()->safeEmail(),
            'genero'            => $this -> faker -> randomElement(['Masculino','Femenino','Otro']),
            'fechaNacimiento'   => $this -> faker -> randomElement(['2003/12/13','2002/12/16','2005/08/13','2022/02/14']),
            'email_verified_at' => now(),
            'password'          => $this -> faker -> randomElement(['12345678']),//bcrypt('password'), // password '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
            'remember_token'    => Str::random(10),
        ];

    }

    public function userNameEmail($email){
        return Str::of($email)->before('@')->replaceMatches('/[0-9]+/', '')->headline();
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
