<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Paciente;

class Pacientesseeder extends Seeder
{
    /**
     * Run the database seeds.)
     */
    public function run(): void
    {
        Paciente::create([
            'Apodo'=> 'Tom', 
            'Edad'=> 1,
            'Peso'=> 3.5,
            'UltimaCita'=> '2025-08-04',
        ]);

        Paciente::create([
            'Apodo'=> 'Ñañeko', 
            'Edad'=> 1,
            'Peso'=> 2.9,
            'UltimaCita'=> '2025-21-10',
        ]);

        Paciente::create([
            'Apodo'=> 'Ceta', 
            'Edad'=> 2,
            'Peso'=> 6.8,
            'UltimaCita'=> '2025-02-08',
        ]);
    }
}
