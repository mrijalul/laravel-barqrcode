<?php

use App\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		// $this->call(UsersTableSeeder::class);
		$faker = Faker::create();
		foreach (range(1,10) as $index) {
			Product::create([
				'product_id'=> $faker->isbn10,
				'product_name'=> $faker->country,
				'product_price'=> $faker->randomNumber(2),
				'product_image'=> $faker->imageUrl(),
			]);
		}
	}
}
