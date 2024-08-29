<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()->count(10)->create();

        Customer::factory()->count(20)->create();

        Customer::factory()->count(5)->create();

        Customer::factory()->count(15)->create();
    }
}
