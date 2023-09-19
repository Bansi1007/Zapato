<?php

namespace Database\Factories;

use App\Models\products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class productsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = products::class;
    public function definition()
    {
        return [
            'productname' => $this->faker->sentence,
            'productimg' => $this->faker->imageUrl(200, 200, 'fashion', true),
            'productdesc1' => $this->faker->sentence,
            'productdesc2' => $this->faker->sentence,
            'productWarranty' => $this->faker->numberBetween(6, 24),
            'productPrice' => $this->faker->numberBetween(1, 300),
        ];
    }

}
