<?php

namespace App\Filament\Resources\ActivityreportsResource\Pages;

use App\Filament\Resources\ActivityreportsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListActivityreports extends ListRecords
{
    protected static string $resource = ActivityreportsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
