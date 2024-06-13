<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $image =$this->faker->randomElement([
                'b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg',
                'b6.jpg', 'b7.jpg', 'b8.jpg', 'b9.jpg', 'b10.jpg',
                'b11.jpg', 'b12.jpg', 'b13.jpg', 'b14.jpg', 'b15.jpg',
                'b16.jpg', 'b17.jpg', 'b18.jpg', 'b19.jpg', 'b20.jpg',
                'b21.jpg', 'b22.jpg',
            ]);

        return [
            'image' => $image,
            'category_id' => Category::inRandomOrder()->first()->id,
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraphs(3, true),
            'posting' => $this->faker->date(),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
