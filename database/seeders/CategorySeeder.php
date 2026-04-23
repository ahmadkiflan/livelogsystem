<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'color' => 'rose',
            ],
        );

        Category::create(
            [
                'name' => 'Artificial Intelligence',
                'slug' => 'artificial-intelligence',
                'color' => 'fuchsia',
            ],
        );

        Category::create(
            [
                'name' => 'Data Science',
                'slug' => 'data-science',
                'color' => 'teal',
            ],
        );
    }
}
