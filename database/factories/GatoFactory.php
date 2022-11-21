<?php

namespace Database\Factories;

use App\Models\Gato;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Gato ::class;
    public function definition()
    {
        return [
            'Sabor' => ("'Res', 'Pescado','pollo'"),
            'Precio' => $this -> faker -> numberBetween(10,20),
            'Cantidad' => $this -> faker -> numberBetween(1,100)
            //
        ];
    }
}
