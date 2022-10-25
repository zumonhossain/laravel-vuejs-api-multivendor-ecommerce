<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(){

        $image = "upload/sliders/" . $this->faker->numberBetween(1, 4) . ".jfif";

        return [
            // 'image' => $this->faker->imageUrl('1440', '450'),
            'image' => $image,
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
