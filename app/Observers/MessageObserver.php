<?php

namespace App\Observers;

use App\Models\Message;
use App\Models\User;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class MessageObserver
{
    public function created(Message $message): void
    {
        $user = User::get()->first();
        if ($user) {
            Notification::make()
                ->title('You have a new message by '.$message->name)
                ->sendToDatabase($user);
        } else {
            dd($message);
        }

    }
}
