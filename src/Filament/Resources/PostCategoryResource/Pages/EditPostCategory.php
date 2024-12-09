<?php

namespace SDenizhan\Blog\Filament\Resources\PostCategoryResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use SDenizhan\Blog\Filament\Resources\PostCategoryResource;

class EditPostCategory extends EditRecord
{
    protected static string $resource = PostCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
