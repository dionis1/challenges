<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use \DateTime;

class ChallengeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'start_date' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'end_date' => $this->faker->dateTimeBetween('-1 week', '+8 week'),
            'image_url' => 'nullable|string|url',
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'prize_title' => $this->faker->sentence(),
            'prize_description' =>  $this->faker->text(100),
        ];
    }
}

 