<?php

namespace Database\Factories;

use App\Models\Insumo;
use Illuminate\Database\Eloquent\Factories\Factory;

class InsumoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Insumo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo_sicoin' => $this->faker->randomNumber(5, false),
            'nombre' => $this->faker->word,
            'descripcion' => $this->faker->text(45),
            'subcategory_id' => $this->faker->numberBetween(1, 25),
            'presentation_id' => $this->faker->numberBetween(1,5)
        ];
    }
}
