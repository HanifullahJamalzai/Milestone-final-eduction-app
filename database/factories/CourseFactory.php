<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'trainer_id' => 1,
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(10),
            'schedule' => fake()->dateTime(),
            'available_seat' => 5,
            'price' => 100,
            'photo' => fake()->imageUrl(640, 480, 'animals', true),
        ];
    }
}
