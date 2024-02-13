<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SurveyVragenResource\Pages;
use App\Filament\Resources\SurveyVragenResource\RelationManagers;
use App\Models\SurveyVragen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SurveyVragenResource extends Resource
{
    protected static ?string $model = SurveyVragen::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    Protected static ?string $navigationGroup = 'Surveys';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Question')
                    ->maxLength(500),
                Forms\Components\TextInput::make('SGroup')
                    ->maxLength(45),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('Question')
                    ->searchable(),
                Tables\Columns\TextColumn::make('SGroup')
                    ->searchable(),
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
            'index' => Pages\ListSurveyVragens::route('/'),
            'create' => Pages\CreateSurveyVragen::route('/create'),
            'edit' => Pages\EditSurveyVragen::route('/{record}/edit'),
        ];
    }
}
