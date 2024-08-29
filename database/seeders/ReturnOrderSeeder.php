<?php

namespace Database\Seeders;

use App\Models\ReturnOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReturnOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReturnOrder::factory()->count(26)->create();
    }
}
