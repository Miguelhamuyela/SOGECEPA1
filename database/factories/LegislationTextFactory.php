<?php

namespace Database\Factories;

use App\Models\LegislationText;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LegislationTextFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LegislationText::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
          
            'body' => "Texto em Legislação"
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
}
