<?php

use cmsNico\Entities\Article;

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ArticleTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
            $name = $faker->name;
			Article::create([
                'cat_id' => $faker->randomElement([1, 2]),
                'title'  => $name,
                'description'	 => $faker->text(900),
                'slug' => Str::slug($name)
			]);
		}
	}

}