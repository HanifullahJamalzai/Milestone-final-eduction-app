<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hero>
 */
class HeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'description' => 'Are you designing your first web page but don’t know where to start? Do you want to conveniently create functional and well-structured websites? Do you want to build long, complex web pages effortlessly? If you answered yes to these questions, you definitely need a rich text editor.

            Because the internet is full of information about creating and designing your own web pages, it can be a bit overwhelming. That’s why we have created this easy-to-understand beginner’s guide to rich text editors. This guide will help you understand why you need a great rich text editor like the Froala rich text editor and how you can use it for your next project.',
            'photo' => fake()->imageUrl(640, 480, 'animals', true),
        ];
    }
}
