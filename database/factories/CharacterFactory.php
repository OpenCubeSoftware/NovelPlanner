<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $given_name = $this->faker->name();
        return [
            'display_name' => $given_name,
            'given_name' => $given_name,
            'surname' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'type' => $this->faker->randomElement(['major', 'minor']),
            'plot_type' => $this->faker->randomElement(['plot', 'subplot']),
            'age' => $this->faker->numberBetween(18, 90),
            'user_id' => User::first()->id,

        ];
    }
}
