<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'name' => "Action"
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => "Fantasy"
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => "Romance"
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => "Mystery"
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => "Thriller"
            ]
        );
    }
}
