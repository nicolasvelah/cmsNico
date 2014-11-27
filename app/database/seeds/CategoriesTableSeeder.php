<?php

use cmsNico\Entities\Category;

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
        $faker = Faker::create();

		Category::create([
            'title' => 'Empresa',
            'description' => $faker->text(200),
            'slug'  => 'empresa'
		]);

        Category::create([
            'title' => 'Portafolio',
            'description' => $faker->text(200),
            'slug' => 'portafolio'
        ]);

	}

}