<?php

namespace App\Filament\Resources\TagResource\Pages;

use App\Filament\Resources\TagResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateTag extends CreateRecord
{
    protected static string $resource = TagResource::class;

    protected function afterCreate(): void
    {
        Notification::make()
            ->title('Tag created')
            ->body('The post has been successfully created.')
            ->success()
            ->send();
    }
}
