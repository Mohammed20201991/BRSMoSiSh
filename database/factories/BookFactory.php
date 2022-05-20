<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
    public function definition()
    {
        $arr = array( "a"=>"hu", "b"=>"ar", "c"=>"en", "d"=>"ger" );
        shuffle($arr);
        return [
            'genre_id'      => $this->faker->randomElement(Genre::all())['id'],
            'title'         => $this->faker->name(),
            'authors'       => $this->faker->firstName(),
            'description'   => $this->faker->optional()->sentence(),
            'released_at'   => $this->faker->date(),
            // 'cover_image'   => $this->faker->optional()->text(),
            // 'cover_image'   => $this->faker->imageUrl(360, 360, 'animals', true, 'cats'),
            'cover_image'   => 'https://media.istockphoto.com/vectors/abstract-minimal-geometric-circle-background-for-business-annual-vector-id1210701957?k=20&m=1210701957&s=612x612&w=0&h=FcOUXSrxlHnJztn-U_JSQ0X-VyyUtLKRV4QXSHfprvs=',
            'pages'         => $this->faker->randomNumber(),
            'language_code' => $arr[1],
            'isbn'          => $this->faker->words(13, true),
            'in_stock'      => $this->faker->randomNumber(),
        ];
    }
}
