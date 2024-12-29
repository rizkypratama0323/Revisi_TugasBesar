<?php

namespace App\Filament\Resources\BosResource\Pages;

use App\Filament\Resources\BosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBos extends ListRecords
{
    protected static string $resource = BosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
