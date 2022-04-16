<?php

namespace Database\Factories;

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
                'title'         => $this->faker->title(),
                'authors'       => $this->faker->firstName(),
                'description'   => $this->faker->optional()->sentence(),
                'released_at'   => $this->faker->date(),
                'cover_image'   => $this->faker->optional()->text(),
                'pages'         => $this->faker->randomNumber(),
                // 'language_code' => $this->faker->text(),
                'language_code' =>  $arr[0] ,       //'hu',
                // 'isbn'          => $this->faker->unique(),  //her problem(it was) 
                'isbn'          => $this->faker->unique()->isbn13,
                'in_stock'      => $this->faker->randomNumber(),
                ];
    }
}
