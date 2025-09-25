<?php

namespace App\Jobs;

use App\Models\Notepad;
use App\Models\User;
use Database\Factories\NotepadFactory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessNotepads implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public int $userId,
        public int $count,
    ) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $user = User::find($this->userId);

        if (!$user) return;

        Notepad::factory($this->count)->for($user)->create();
    }
}
