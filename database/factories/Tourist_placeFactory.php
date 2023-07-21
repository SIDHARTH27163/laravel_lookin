<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tourist_place>
 */
class Tourist_placeFactory extends Factory
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
            'heading' => $this->faker->sentence(),
           
            'file' => $this->faker->imageUrl(640,480),
            'description' => $this->faker->text(),
            'description2' => $this->faker->text(),
            'location' => "lakes",
            'category' => "lakes",
            'district' => $this->faker->sentence(),
            'best_time' => $this->faker->sentence(),
        ];
    }
}
