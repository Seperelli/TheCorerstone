<?php

namespace App\Filament\Resources\SurveyVragenResource\Pages;

use App\Filament\Resources\SurveyVragenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSurveyVragen extends EditRecord
{
    protected static string $resource = SurveyVragenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
