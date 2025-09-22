<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;   // ✅ this is the correct one
use Illuminate\Support\Facades\DB;

class LogUserLogin
{
    public function handle(Login $event): void
    {
        DB::table('login_activities')->insert([
            'user_id'      => $event->user->id,
            'logged_in_at' => now(),
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);
    }
}
