<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookCategorySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        for ($i=1; $i <= 10 ; $i++) {
            $r = $faker->numberBetween(1, 3);
            $used = [
                1 => 0,
                2 => 0,
                3 => 0,
                4 => 0,
                5 => 0
            ];
            $j = 0;
            while ($j < $r) {
                $id = $faker->numberBetween(1, 5);
                if ($used[$id] == 1) {
                    continue;
                }
                $used[$id] = 1;
                DB::table('book_categories')->insert(
                    [
                        'book_id' => $i,
                        'category_id' => $id,
                    ]
                );
                $j++;
            }
        }
    }
}
