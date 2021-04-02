<?php

namespace Database\Factories;

use App\Models\CinemaMovie;
use Illuminate\Database\Eloquent\Factories\Factory;

class CinemaMovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CinemaMovie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cinema_id' => $this->faker->numberBetween(1,8),
            'movie_id' => $this->faker->numberBetween(1,30),
            
        ];
    }
}
