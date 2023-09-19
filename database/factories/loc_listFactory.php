<?php

namespace Database\Factories;
use App\Models\loc_list;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\loc_list>
 */
class loc_listFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = loc_list::class;
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'address_1' => $this->faker->address,
            'address_2' => $this->faker->city,
            'phone' => $this->faker->numerify('880-####-######'),
           
        ];
    }
}
