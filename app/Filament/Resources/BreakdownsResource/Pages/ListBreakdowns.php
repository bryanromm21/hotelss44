<?php

namespace App\Filament\Resources\BreakdownsResource\Pages;

use App\Filament\Resources\BreakdownsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBreakdowns extends ListRecords
{
    protected static string $resource = BreakdownsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
