<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchandise>
 */
class MerchandiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $basePrice = fake()->numberBetween(10,100);
        return [
            'name' => fake()->words(3, true),
            'description' => fake()->sentence,
            'category_id' => fake()->numberBetween(1,5),
            'sku' => fake()->uuid,
            'bar_code' => fake()->isbn13,
            'wholesale_price' => ($basePrice*10) * .8,
            'retail_price' => $basePrice
        ];
    }
}
