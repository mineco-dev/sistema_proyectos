<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Provider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nit' => $this->faker->numberBetween(58000,60000),
            'nombre' => $this->faker->text(20),
            'direccion' => $this->faker->sentence,
            'telefono' => $this->faker->randomNumber(8,true),
            'correo'=> $this->faker->email,
            'contacto' => $this->faker->randomNumber(8,true)
        ];
    }
}
