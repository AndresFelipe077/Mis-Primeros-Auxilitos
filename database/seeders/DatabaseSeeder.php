<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\models\User;
use App\Models\Contenido;
use Database\Factories\UserFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Contenido::factory(10)->create();
        
        //$this->call(UserFactory::class);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        //$this->call(RegistroSeeder::class);

    }
}
