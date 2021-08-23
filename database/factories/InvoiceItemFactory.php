<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\InvoiceItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InvoiceItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'invoice_id' => Invoice::factory(),
            'date' => $this->faker->date,
            'subject' => $this->faker->sentence,
            'hours' => $this->faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 1000),
            'amount' => $this->faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 1000),
        ];
    }
}