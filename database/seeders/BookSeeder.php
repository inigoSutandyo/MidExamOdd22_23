<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $faker = Faker::create();

        DB::table('books')->insert(
            [
                'publisher_id' => 1,
                'title' => "Harry Potter",
                'author' => "JK Rowling",
                'year' => 2001,
                'synopsis' => 'something something',
                'image' => 'books/harry_potter.jpg'
            ]
        );

        for ($i=1; $i <= 9 ; $i++) {
            $title = "Dummy Book ".$i;
            DB::table('books')->insert(
                [
                    'publisher_id' => $faker->numberBetween(1,5),
                    'title' => $title,
                    'author' => $faker->name(),
                    'year' => $faker->numberBetween(2000,2021),
                    'synopsis' => $faker->paragraph(),
                    'image' => 'books/dummy_book.jpg'
                ]
            );
        }
    }
}
