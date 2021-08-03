<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'content' => $this->faker->paragraph
        ];
    }
}