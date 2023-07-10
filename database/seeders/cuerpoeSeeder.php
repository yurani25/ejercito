<?php

namespace Database\Seeders;

use App\Models\cuerpoe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class cuerpoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        cuerpoe::factory(50)->create();
    }
}
