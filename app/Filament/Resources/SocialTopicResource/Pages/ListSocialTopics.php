<?php

namespace App\Filament\Resources\SocialTopicResource\Pages;

use App\Filament\Resources\SocialTopicResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSocialTopics extends ListRecords
{
    protected static string $resource = SocialTopicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
