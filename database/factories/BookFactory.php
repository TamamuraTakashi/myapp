<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'        => $this->faker->realText(20), // 日本語タイトル
            'author' => $this->faker->name(), // 日本語fakerなら日本人名
            'published_at' => $this->faker->optional()->dateTimeBetween('-20 years', 'now'),
            'isbn'         => $this->faker->unique()->isbn13(),
            'status'       => $this->faker->boolean(), // true/false
        ];
    }
}
