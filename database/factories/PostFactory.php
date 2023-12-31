<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */

     protected $model = Post::class;
    public function definition(): array
    {
        return [
            'id'=>$this->faker->id,
            'title'=>$this->faker->name,
            'content'=>$this->faker->content,
            'user_id'=>$this->faker->user_id,
            'category_id'=>$this->faker->category_id,
        ];
    }
}
