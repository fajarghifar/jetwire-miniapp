<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(20),
            'description' => $this->faker->text(200),
            'price' => $this->faker->numberBetween(100, 10000),
            'user_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
