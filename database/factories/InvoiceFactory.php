<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id' => Client::factory(),
            'total' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
            'description' => $this->faker->paragraph,
            'total_hours' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
        ];
    }
}