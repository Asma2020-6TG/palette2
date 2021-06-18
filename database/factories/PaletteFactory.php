<?php

namespace Database\Factories;

use App\Models\Palette;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaletteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Palette::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //return [
          //  'color_id'=> $this->faker->id,
          //  'category_id'=> $this->faker->id,
          //  'favourite'=> $this->faker->boolean,
          //  'size'=> $this->faker->numberBetween($int=3,$int=6),

       // ];
    }
}
