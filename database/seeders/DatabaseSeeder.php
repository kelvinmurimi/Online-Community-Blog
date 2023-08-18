<?php

namespace Database\Seeders;

//use Database\Factories\ArticleFactory;
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
        User::factory(20)->create();
        Article::factory(200)->create();

    }
}
