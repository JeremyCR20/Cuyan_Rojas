<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Producto::create([
                'codigo' => $faker->unique()->ean13,
                'nombre' => $faker->sentence(2),
                'descripcion' => $faker->text,
                'precio' => $faker->randomFloat(2, 1, 1000),
                'stock' => $faker->numberBetween(1, 1000),
            ]);
    }   
}
}