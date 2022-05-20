<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrow>
 */
class BorrowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'reader_id'      => $this->faker->randomElement(User::where('is_librarian', 0)->get())['id'],
            'book_id'        => $this->faker->randomElement(Book::all())['id'],
            'status'         => 'PENDING',
            // 'status'         => $this->faker->randomElement(['PENDING', 'ACCEPTED', 'REJECTED']),
        ];
    }
}
