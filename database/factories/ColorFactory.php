<?php

namespace Database\Factories;

use App\Models\Color;
use Illuminate\Database\Eloquent\Factories\Factory;

class ColorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Color::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       // return [
       //     'palette_id'=> $this->faker->id,
       //     'category_id'=> $this->faker->id,
       //     'status'=> $this->faker->boolean,
       //     'hexcolor'=> $this->faker->hexcolor,
         //   'rgbcolor'=>$this->faker->rgbcolor
       // ];
    }
}
