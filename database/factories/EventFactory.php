<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'photo' => fake()->imageUrl(640, 480, 'animals', true),
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(2),
            'starting_date' => fake()->dateTimeAD(),
        ];
    }
}
