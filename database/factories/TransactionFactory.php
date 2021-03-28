<?php

namespace Database\Factories;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'position' => $this->faker->numberBetween(1,150000),
            'transactions' => $this->faker->numberBetween(1,1000),
            'user_id' => User::factory(),
            'screenshot' => $this->faker->imageUrl(),
        ];
    }
}
