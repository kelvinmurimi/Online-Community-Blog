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
<<<<<<< HEAD
           ArticleDatabaseSeeder::class,
           CategoryTableSeeder::class
=======
          // ArticleDatabaseSeeder::class,
>>>>>>> 5b9989e209667c48986439c39ef6640c097d4f6b
        ]);
        User::factory(20)->create();
        Article::factory(200)->create();

    }
}
