<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Carrera;
use App\Models\Estudiante;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Carrera::insert([
                ["nombre" => "ingeniería de sistemas", "duracion" => 9],
                ["nombre" => "psicología", "duracion" => 9],
                ["nombre" => "derecho", "duracion" => 9],
                ["nombre" => "ingeniería comercial", "duracion" => 9],
                ["nombre" => "administración de empresas", "duracion" => 9],
            ]
        );
        Estudiante::insert(
            [
                ["nombre" => "adriana", "apellido" => "arduz", "semestre" => 1, "carreras_id" => 1],
                ["nombre" => "belén", "apellido" => "barroso", "semestre" => 2, "carreras_id" => 2],
                ["nombre" => "carlos", "apellido" => "caballero", "semestre" => 3, "carreras_id" => 3],
                ["nombre" => "damaris", "apellido" => "barrios", "semestre" => 4, "carreras_id" => 4],
                ["nombre" => "esteban", "apellido" => "arce", "semestre" => 5, "carreras_id" => 5],
            ]
        );

    }
}
