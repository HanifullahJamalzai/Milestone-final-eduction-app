<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
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
            'name' => fake()->name(),
            'position' => fake()->jobTitle(),
            'description' => fake()->paragraph(5),
        ];
    }
}
