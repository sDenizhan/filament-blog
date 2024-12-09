<?php

namespace SDenizhan\Blog\Filament\Resources;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use SDenizhan\Blog\Models\PostCategory;

class PostCategoryResource extends Resource
{
    protected static ?string $model = PostCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \SDenizhan\Blog\Filament\Resources\PostCategoryResource\Pages\ListPostCategories::route('/'),
            'create' => \SDenizhan\Blog\Filament\Resources\PostCategoryResource\Pages\CreatePostCategory::route('/create'),
            'edit' => \SDenizhan\Blog\Filament\Resources\PostCategoryResource\Pages\EditPostCategory::route('/{record}/edit'),
        ];
    }
}
