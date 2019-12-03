<?php

use App\Paginate;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PaginateSeeder extends Seeder
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
            DB::table('paginates')->insert([
                'name' => $faker->name
            ]);
        }
    }
}
