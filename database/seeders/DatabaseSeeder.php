<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        
        $this->call([
            //UsersSeeder::class, //Comentou-se essa linha para essa seeder nao ser executada duas vezes
            CategoriasSeeder::class,
        ]);
    }
}