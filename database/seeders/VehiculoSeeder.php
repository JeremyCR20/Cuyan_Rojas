<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculoSeeder extends Seeder
{
    public function run()
        {
            DB::table('vehiculos')->insert([
                'placa' => 'DCF156',
                'modelo' => 'Nissan Azul',
                'propietario' => 'Jeremy Cuyan',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
    }
}