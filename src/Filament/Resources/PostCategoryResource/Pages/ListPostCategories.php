<?php

namespace SDenizhan\Blog\Filament\Resources\PostCategoryResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use SDenizhan\Blog\Filament\Resources\PostCategoryResource;

class ListPostCategories extends ListRecords
{
    protected static string $resource = PostCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
