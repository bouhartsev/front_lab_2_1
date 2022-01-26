<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{

    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            // ADD SLUG HERE AND TO OTHER FILES (controllers and etc.)
            'slug' => $this->faker->unique()->slug(),
            'desc' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }
}
