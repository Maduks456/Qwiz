<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Theme;
class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Theme::create(['name' => 'Math']);
        Theme::create(['name' => 'Sport']);
        Theme::create(['name' => 'History']);
        Theme::create(['name' => 'Programming']);
        Theme::create(['name' => 'Computer Science']);
    }
}
