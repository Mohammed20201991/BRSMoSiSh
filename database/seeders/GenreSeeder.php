<?php

namespace Database\Seeders;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // static way
        Genre::create([
            'name' => 'Web Engineering ',
            'style' => 'secondary',
        ]);
        Genre::create([
            'name' => 'Science',
            'style' => 'success',
        ]);
        // dynmc way
        Genre::factory(6)->create();

    }
}
