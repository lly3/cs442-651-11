<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tags = ['sport', 'game', 'movie', 'policy', 'lifestyle', 'history'];

        return [
            'name' => $tags[array_rand($tags)]
        ];
    }
}
