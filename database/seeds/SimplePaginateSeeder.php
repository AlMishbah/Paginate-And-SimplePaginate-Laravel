<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SimplePaginateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(0, 15) as $i) {
            DB::table('simplepaginates')->insert([
                'name' => $faker->name
            ]);
        }
    }
}
