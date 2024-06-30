<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\categoria;
use App\Models\post;
use App\Models\productos;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(categoriasSeeder::class);
        post::factory(10)->create();
        productos::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
