<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Lawyer;
use App\Models\LawyerCase;
use Illuminate\Database\Eloquent\Factories\Factory;

class LawyerCaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LawyerCase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id' => Client::factory(),
            'lawyer_id' => Lawyer::factory(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'judge_name' => $this->faker->name,
            'enemy' => $this->faker->name,
            'place' => $this->faker->city,
        ];
    }
}