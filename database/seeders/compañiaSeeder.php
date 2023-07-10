<?php

namespace Database\Seeders;

use App\Models\compañia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class compañiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        compañia::factory(50)->create();
    }
}
