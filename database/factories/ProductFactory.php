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
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'name' => $this->faker->text(25),
            'price' => $this->faker->numberBetween($min = 15000, $max = 350000),
            'category_id' => $this->faker->randomElement([1, 2, 3, 4]),
        ];
    }
}
