<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(6, false);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'author_id' => User::factory(), // Assuming you have a User factory
            'category_id' => Category::factory(), // Assuming you have a Category factory
            'content' => $this->faker->paragraphs(3, true),
        ];
    }
}
