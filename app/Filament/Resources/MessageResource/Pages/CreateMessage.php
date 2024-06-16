<?php

namespace App\Filament\Resources\MessageResource\Pages;

use App\Filament\Resources\MessageResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateMessage extends CreateRecord
{
    protected static string $resource = MessageResource::class;

    protected function afterCreate(): void
    {
        Notification::make()
            ->title('Tag created')
            ->body('The post has been successfully created.')
            ->success()
            ->sendToDatabase(auth()->user());
    }
}
