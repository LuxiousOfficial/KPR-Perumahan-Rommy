<?php

namespace App\Filament\Resources\MortgageResource\Pages;

use App\Filament\Resources\MortgageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMortgage extends EditRecord
{
    protected static string $resource = MortgageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
