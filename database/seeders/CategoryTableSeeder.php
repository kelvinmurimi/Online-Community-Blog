<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        //
        Category::firstOrCreate([
            'name' => 'sport',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::firstOrCreate([
            'name' => 'Love & Relationships',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::firstOrCreate([
            'name' => 'education',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::firstOrCreate([
            'name' => 'economics',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::firstOrCreate([
            'name' => 'entertainment',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::firstOrCreate([
            'name' => 'religion',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::firstOrCreate([
            'name' => 'fashion',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::firstOrCreate([
            'name' => 'health',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::firstOrCreate([
            'name' => 'agriculture',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::firstOrCreate([
            'name' => 'cars',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::firstOrCreate([
            'name' => 'Technology',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::firstOrCreate([
            'name' => 'real estate',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::firstOrCreate([
            'name' => 'kitchen',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
