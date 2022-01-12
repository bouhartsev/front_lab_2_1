<?php

namespace Database\Factories;

use App\Models\ServiceComment;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceComment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mark' => $this->faker->numberBetween(4,5),
            'comment' => $this->faker->text(),
        ];
    }
}
