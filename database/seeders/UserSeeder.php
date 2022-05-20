<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seed like static
        User::create([
            'name'              => 'Reader',
            'email'             => 'reader@brs.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'),
            'is_librarian'      => '0',
            'remember_token'    => Str::random(10),
        ]);

        User::create([
            'name'              => 'Labrarien',
            'email'             => 'librarian@brs.com',
            'email_verified_at' =>  now(),
            'password'          =>  Hash::make('password'),
            'is_librarian'      =>  '1',
            'remember_token'    =>  Str::random(10),
        ]);

        User::create([
            'name'              => 'Labrarien2',
            'email'             => 'librarian2@brs.com',
            'email_verified_at' =>  now(),
            'password'          =>  Hash::make('password'),
            'is_librarian'      =>  '1',
            'remember_token'    =>  Str::random(10),
        ]);

        // seed  random values
        User::factory(3)->create();

    }
}
