<?php

use cmsNico\Entities\Article;
use cmsNico\Entities\Comments;

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ArticleTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        $i = 1;

		foreach(range(1, 10) as $index)
		{
            $name = $faker->name;
			Article::create([
                'cat_id' => $faker->randomElement([1, 2]),
                'title'  => $name,
                'description'	 => $faker->text(900),
                'slug' => Str::slug($name)
			]);

            Comments::create([
                'user_id' => $i,
                'component_name' => 'articles',
                'component_item_id' => $i,
                'title' => $faker->text(30),
                'comment' => $faker->text(300),
                'rate' => $faker->randomElement([1,2,3,4,5])
            ]);
            $i++;
		}
	}

}