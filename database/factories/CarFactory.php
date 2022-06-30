<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'des'=>$this->faker->paragraph(),
            'model'=>$this->faker->name(),
            'pro_on'=>now(),
            'img'=>'hinh'.rand(1,5).'.jpg',
            'mf_id'=>rand(1,5),
        ];
    }
}
