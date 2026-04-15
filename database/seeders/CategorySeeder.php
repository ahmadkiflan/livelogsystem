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
                'color' => 'bg-blue-100 ',
            ],
        );

        Category::create(
            [
                'name' => 'Artificial Intelligence',
                'slug' => 'artificial-intelligence',
                'color' => 'bg-purple-100 ',
            ],
        );

        Category::create(
            [
                'name' => 'Data Science',
                'slug' => 'data-science',
                'color' => 'bg-green-100 ',
            ],
        );
    }
}
