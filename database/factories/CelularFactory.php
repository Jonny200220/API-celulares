<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Marca;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Celular>
 */
class CelularFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $marca = Marca::inRandomOrder()->first();

        return [
            'no_serie' => $this->faker->unique()->numerify('##########'),
            'sistema_operativo' => $this->faker->randomElement(['Android', 'iOS']),
            'ram' => $this->faker->randomElement(['2 GB', '4 GB', '6 GB', '8 GB']),
            'procesador' => $this->faker->randomElement(['Snapdragon', 'Exynos', 'Bionic', 'Kirin']),
            'marca_id' => $marca->id,
            'color' => $this->faker->safeColorName(),
        ];
    }
}
