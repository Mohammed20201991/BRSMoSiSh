<?php

namespace Database\Seeders;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // First way 
        // DB::table('genres')->truncate();
        // Genre::factory(3)->count(10)->create();
        // Second way 
        Genre::factory(3)->create();
        Genre::create([
                        'name' => 'Mathmatics',
                        'style' => 'secondary',
                        ]);
        // $genrs = Genre::all();

        // Book::factory()
        //     ->for($genrs->random())
        //     // ->hasBooks(5)
        //     ->count(10)
        //     ->create();

    }
}
