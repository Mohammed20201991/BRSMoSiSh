<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Genre>
 */
class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // protected $model = Genre::class;

    public function definition()
    {
        // random element
        // echo $faker->randomElement(['a', 'b', 'c', 'd', 'e']);
        // $arrayValues = ['primary', 'secondary', 'success','danger','warning','info','light','dark'];
        return [
                'name' => $this->faker->name(),
		        'style' => $this->faker->name(),
                // 'style' => $this->$arrayValues[rand(0,8)],
                // 'style' => $this->faker->randomElement(['primary',
                //                                         'secondary',
                //                                         'success',
                //                                         'danger',
                //                                         'warning',
                //                                         'info',
                //                                         'light',
                //                                         'dark']),
              ];
    }
}
