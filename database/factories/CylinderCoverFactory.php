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
        $disposed = $this->faker->numberBetween(0, 1);
        $disposalDate = $disposed == 1 ? $this->faker->dateTimeThisDecade() : NULL;
        $storage = $this->faker->randomElement(["KLL", "大前運送", "パーツセンター", NULL]);
        $storageDate = $storage != NULL ? $this->faker->dateTimeInInterval($disposalDate, "-2 years") : NULL;
        $status = $storage != NULL ? "Storage" : $this->faker->randomElement(["Disassembly", "Grooving", "LMD", "Finishing", "Assembly", "Operation"]);
        $cycle = $this->faker->numberBetween(0, 5);

        return [
            "serial_number" => $name,
            "is_disposed" => $disposed,
            "disposal_date" => $disposalDate,
            "storage" => $storage,
            "date_stored" => $storageDate,
            "status" => $status,
            "cycle" => $cycle
        ];
    }
}
