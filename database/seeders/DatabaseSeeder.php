<?php

namespace Database\Seeders;

use App\Models\Marca; // Importar el modelo Marca
use App\Models\Celular; // Importar el modelo Celular
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void

    {

        // Generar datos
        Marca::factory()->count(8)->create();
        Celular::factory()->count(8)->create();

        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
