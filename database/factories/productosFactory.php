<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\productos>
 */
class productosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            //
        'nombre' => $this->faker->sentence(1),
        'descripcion' => $this->faker->sentence(20),
        'id_categoria' => $this->faker->numberBetween(1,5),
        'color' => $this->faker->colorName(),
        'tamanio' => 'Grande',
        'imagen'=> $this->faker->imageUrl(640,480,'animals',true)
        ];
    }
}
