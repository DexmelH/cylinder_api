<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\CylinderCover;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "customer_id" => Customer::pluck('id')->random(),
            "cylinder_cover_id" => CylinderCover::pluck('id')->random(),
            "order_date" => $this->faker->dateTimeThisDecade()
        ];
    }
}
