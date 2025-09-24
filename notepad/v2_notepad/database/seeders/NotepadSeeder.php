<?php

namespace Database\Seeders;

use App\Models\Notepad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotepadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Notepad::factory(50)->create();
    }
}
