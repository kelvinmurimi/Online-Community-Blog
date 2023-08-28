<?php

namespace Database\Seeders;

//use Database\Factories\ArticleFactory;
use App\Models\Comment;
use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Database\Seeders\CategoryTableSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AppDatabaseSeeder::class,
            RolesDatabaseSeeder::class,
            SettingsDatabaseSeeder::class,
            UserDatabaseSeeder::class,
            CategoryTableSeeder::class
          // ArticleDatabaseSeeder::class,
        ]);
        User::factory(50)->create();
        Article::factory(300)->create();
        Comment::factory(1000)->create();

    }
}
