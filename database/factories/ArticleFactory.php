<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition(): array
    {
        $title = $this->faker->sentence;
        $slug = Str::slug($title,'-');
        return [
            //
            'title'=>$title,
                'slug'=>$slug,
                 'excerpt'=>$this->faker->realText($maxNbChars=80),
                 'min_to_read'=>$this->faker->numberBetween(1,10),
                 'image'=>$this->faker->imageUrl(640,480),
                   'is_published'=>1,
                 'body'=>$this->faker->text(),
        ];
    }
}
