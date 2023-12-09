<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model= Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [

            'name' => $this->faker->words(2, true),
            'description' => $this->faker->paragraph(),
            'price'=>$this->faker->randomFloat(2, 1, 100),
            'quantity'=>$this->faker->randomNumber(2, 10)
        ];
    }
}
