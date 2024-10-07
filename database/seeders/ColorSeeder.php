<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Color::create(['name' => 'Red']);
        Color::create(['name' => 'Yellow']);
        Color::create(['name' => 'Blue']);
        Color::create(['name' => 'Black']);
    }
}
