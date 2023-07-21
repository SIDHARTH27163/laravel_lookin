<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->sentence(),
           
            'image' => '1689668762.jpg',
            'description' => $this->faker->text(),
            'additional_description' => $this->faker->text(),
            'date'=>date('d-m-Y'),
            'location' => "Kharota",
            'category' => "Travel",
            'user_name' => "Lookin Dharamshala",
           
        ];
    }
}
