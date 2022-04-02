<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->paragraph(),
            'quantity' => $this->faker->randomDigit(),
            'price' => $this->faker->randomDigit(),
            'old_price' => $this->faker->randomDigit(),
            'status' => $this->faker->numberBetween(0, 1),
        ];
    }
}
