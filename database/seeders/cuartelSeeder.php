<?php

namespace Database\Seeders;

use App\Models\cuartel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class cuartelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        cuartel::factory(50)->create();
    }
}
