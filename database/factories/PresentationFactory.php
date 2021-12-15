<?php

namespace Database\Factories;

use App\Models\presentation;
use Illuminate\Database\Eloquent\Factories\Factory;

class PresentationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = presentation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word
        ];
    }
}
