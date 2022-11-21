<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $name_lists = [
            'Gramedia',
            'Erlangga',
            'Publisher 1',
            'Dummy Publisher',
            'Super Publisher'
        ];

        $image_list = [
            'publishers/publisher_1.jpg',
            'publishers/publisher_dummy.png'
        ];


        for ($i=0; $i < 5; $i++) {
            $x = $faker->numberBetween(0,1);
            DB::table('publishers')->insert(
                [
                    'name' => $name_lists[$i],
                    'address' => $faker->address(),
                    'email' => $faker->email(),
                    'phone' => $faker->phoneNumber(),
                    'image' => $image_list[$x]
                ]
            );
        }
    }
}
