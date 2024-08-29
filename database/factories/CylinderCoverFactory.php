<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CylinderCover>
 */
class CylinderCoverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = "T" . $this->faker->unique->numberBetween(1000, 5000);
        $status = $this->faker->randomElement(["Operation", "Storage", "Disassembly", "Groove", "Assembly"]);
        $dateStarted = $status == "Operation" ? $this->faker->dateTimeThisDecade() : NULL;

        return [
            "name" => $name,
            "lmd_status" => $this->faker->numberBetween(0, 1),
            "location_id" => Location::pluck('id')->random(),
            "status" => $status,
            "date_started" => $dateStarted
        ];
    }
}
