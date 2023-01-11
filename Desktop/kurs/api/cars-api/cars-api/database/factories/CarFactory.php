<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        $engine = collect(['diesel', 'petrol', 'hybrid', 'electric']);
        return [
            'brand' => fake()->text(20),
            'model' => fake()->text(10),
            'year' => fake()->numberBetween(1990, 2023),
            'max_speed' => fake()->numberBetween(100, 300),
            'is_automatic' => fake()->boolean(),
            'engine' => $engine->random(),
            'number_of_doors' => fake()->numberBetween(3, 5),
        ];
    }

}
