<?php

namespace Database\Seeders;
use App\Models\categoria;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        categoria::create(['nombre'=>'niños']);
        categoria::create(['nombre'=>'adultos mayores']);
        categoria::create(['nombre'=>'mascotas']);
        categoria::create(['nombre'=>'Damas']);
        categoria::create(['nombre'=>'Caballeros']);
    }
}
