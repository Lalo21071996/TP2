<?php

namespace Database\Factories;

use App\Models\PerroAdulto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PerroAdultoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PerroAdulto ::class;
    public function definition()
    {
        return [
            'Sabor' => ("'Res','pollo'"),
            'Precio' => $this -> faker -> numberBetween(20,25),
            'Cantidad' => $this -> faker -> numberBetween(1,100)
            //
        ];
    }
}
