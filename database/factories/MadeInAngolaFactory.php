<?php

namespace Database\Factories;
use App\Models\MadeInAngola;
use Illuminate\Database\Eloquent\Factories\Factory;

class MadeInAngolaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = MadeInAngola::class;


    public function definition()
    {
        return [
            
          
            'body' => "A língua Oficial é o Portugês...",
            'image'=>''
        ];
    }
}
