<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            //
            'user_id'=>User::all()->random()->id,
            'article_id'=>Article::all()->random()->id,
            'content'=>$this->faker->text(500),
        ];
    }
}
