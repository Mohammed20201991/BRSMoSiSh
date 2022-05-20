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
        Book::factory(10)->create();
        $arr = array( "a"=>"hu", "b"=>"ar", "c"=>"en", "d"=>"ger" );
        shuffle($arr);
        Book::create([
            'genre_id'      => '1',
            'title'         => 'Algebra',
            'authors'       => 'John',
            'description'   => 'This is amazing book',
            'released_at'   =>  now(),
            'cover_image'   => 'https://blog-cdn.reedsy.com/directories/admin/featured_image/591/large_dissecting-the-cover-of-a-book-ee0d6a.jpg',
            'pages'         =>  random_int(1,100),
            'language_code' =>  $arr[0],
            'isbn'          =>  rand(0,13),
            'in_stock'      =>  random_int(1,100),
        ]);
        Book::create([
            'genre_id'      => '2',
            'title'         => 'Mohammed2',
            'authors'       => 'Auther2',
            'description'   => 'This is amazing book',
            'released_at'   =>  now(),
            'cover_image'   => 'https://blog-cdn.reedsy.com/directories/admin/featured_image/591/large_dissecting-the-cover-of-a-book-ee0d6a.jpg',
            'pages'         =>  10,
            'language_code' =>  $arr[0],
            'isbn'          =>  rand(0,13),
            'in_stock'      =>  random_int(1,100),
        ]);
    }
}
