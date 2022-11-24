<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;
use App\Models\Book;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Book::class;
     public function definition()
    {
        return [
            'title' => $this->faker->title(30),
            'author_id' => Author::get()->random()->id,
            'cover' => 'https://static4.depositphotos.com/1015530/309/i/600/depositphotos_3098299-stock-photo-single-green-book.jpg'
        ];
    }
}
