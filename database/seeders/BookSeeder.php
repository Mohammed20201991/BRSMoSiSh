<?php

namespace Database\Seeders;

use App\Models\Book;
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
        // first way
        // DB::table('books')->truncate();
        // Book::factory()->count(10)->create();


        // Second way 
        Book::factory(10)->create();       
        $arr = array( "a"=>"hu", "b"=>"ar", "c"=>"en", "d"=>"ger" );
        shuffle($arr);
        Book::create([
                        'title'         => 'Algebra',
                        'authors'       => 'John',
                        'description'   => 'This is amazing book',
                        'released_at'   =>  now(),
                        'cover_image'   => 'something',
                        'pages'         =>  10,             //random_int(1,100),
                        'language_code' =>  $arr[0], //'hu',          // $arr[0],
                        'isbn'          =>  1234,         //rand(0,13),
                        'in_stock'      =>  12,          // random_int(1,100),
                    ]);
        
    }
}
