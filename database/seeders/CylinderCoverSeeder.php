<?php

namespace Database\Seeders;

use App\Models\CylinderCover;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CylinderCoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CylinderCover::factory()->count(50)->create();
    }
}
