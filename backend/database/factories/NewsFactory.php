<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    protected $model = News::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText($maxNbChars = 100, $indexSize = 2),
            'preview_content' => $this->faker->realText($maxNbChars = 100, $indexSize = 2),
            'content' => $this->faker->text,
            'thumbnail_url' => $this->faker->image,
        ];
    }
}
