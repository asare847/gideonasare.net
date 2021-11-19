<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Post::class;

    public function definition()
    {
        $title = $this->faker->sentence();
        $slug = Str::slug($title);
        return [
            'title'=> $title,
            'slug'=>$slug,
            'details'=>$this->faker->text(200),
            'image'=>$this->faker->image(public_path('images'),640,480, null, false)
            ];
    }
}
