<?php

namespace Database\Seeders;

//use Database\Factories\ArticleFactory;
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
           ArticleDatabaseSeeder::class,
        ]);
       // Article::factory(100)->create();

    }
}
