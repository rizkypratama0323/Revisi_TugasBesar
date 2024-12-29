<?php

namespace App\Filament\Resources\BosResource\Pages;

use App\Filament\Resources\BosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBos extends EditRecord
{
    protected static string $resource = BosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
