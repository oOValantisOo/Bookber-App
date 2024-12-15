<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;

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
            'BookTitle' => fake()->name(),
            'BookDescription' => fake()->sentence(),
            'BookAuthor' => fake()->name(),
            'BookCategoryId' => Book::inRandomOrder()->value('BookId')
        ];
    }
}