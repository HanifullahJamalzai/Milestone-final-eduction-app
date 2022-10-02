<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trainer>
 */
class TrainerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'bio' => fake()->paragraph(5),
            'category' => 'Programming',
            'photo' => fake()->imageUrl(640, 480, 'animals', true),
            'fb_link' => 'www.facebook.com',
            'twitter_link' => 'www.twitter.com',
            'instagram_link' => 'www.instagram.com',
            'linkedin_link' => 'www.linkedin.com',

        ];
    }
}
