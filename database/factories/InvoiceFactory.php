<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $paid = $this->faker->boolean();
        return [
            'user_id' => User::all()->random()->id,
            'type'=> $this->faker->randomElement(array: ['B','C','P']), //Boleto, cartão ou PIX
            'paid'=> $paid,
            'value'=>$this->faker->numberBetween(1000, 10000),
            'payment_date'=> $paid ? $this-> faker->randomElement(array: [$this->faker->dateTimeThisMonth()]) : NULL
        ];
    }
}
