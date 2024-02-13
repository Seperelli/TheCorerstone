<?php

namespace App\Filament\Resources\SurveyVragenResource\Pages;

use App\Filament\Resources\SurveyVragenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSurveyVragens extends ListRecords
{
    protected static string $resource = SurveyVragenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
