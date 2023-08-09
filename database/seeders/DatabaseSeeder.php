<?php

namespace Database\Seeders;

//use Database\Factories\ArticleFactory;
use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AppDatabaseSeeder::class,
            RolesDatabaseSeeder::class,
            SettingsDatabaseSeeder::class,
            UserDatabaseSeeder::class,
          // ArticleDatabaseSeeder::class,
        ]);
        User::factory(20)->create();
        Article::factory(200)->create();

    }
}
