<?php

namespace Database\Factories;

use App\Models\Cachorro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CachorroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Cachorro ::class;
    public function definition()
    {
        return [
            'Sabor' =>$this -> faker ->randomElement ($array = array ('Res','pollo')),
            'Precio' => $this -> faker -> numberBetween(20,25),
            'Cantidad' => $this -> faker -> numberBetween(1,100)
            //
        ];
    }
}
