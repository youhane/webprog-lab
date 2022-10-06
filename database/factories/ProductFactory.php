<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 5),
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'detail' => $this->faker->text,
            'price' => $this->faker->numberBetween(1000, 100000),
        ];
    }
}
