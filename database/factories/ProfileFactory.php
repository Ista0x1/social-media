<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'language' => $this->faker->randomElement(['arabic', 'english']),
            'followers_count' => $this->faker->numberBetween(1,1000),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'age' => $this->faker->numberBetween(16, 99),
        ];
    }
}
