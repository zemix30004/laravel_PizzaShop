<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()

    {
        return [
            'category_id' => $this->faker->numberBetween(1, 50),
            'name' => $this->faker->name(),
            'code' => $this->faker->numberBetween(1, 50),
            'description' => $this->faker->text(),
            'image' => $this->faker->image(),
            'price' => $this->faker->numberBetween(5, 100),
            'size' => $this->faker->numberBetween(1, 50),
            'is_spicy' => $this->faker->boolean(),
            'is_veg' => $this->faker->boolean(),
            'is_best_offer' => $this->faker->boolean(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
