<?php

namespace Database\Seeders;

use App\Jobs\ProcessNotepads;
use App\Models\Notepad;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotepadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            // dispatch(Notepad::factory(1000000)->count(1000)->for($user));

            // ProcessNotepads::dispatch($user->id, 10);

            $chunkSize = 10000;
            for ($i = 0; $i < $chunkSize; $i++) {
                ProcessNotepads::dispatch($user->id, 1000);
            }
        }
    }
}
