<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomersResource\Pages;
use App\Filament\Resources\CustomersResource\RelationManagers;
use App\Models\Customers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustomersResource extends Resource
{
    protected static ?string $model = Customers::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('CompanyName')
                    ->maxLength(45),
                Forms\Components\TextInput::make('Street')
                    ->maxLength(45),
                Forms\Components\TextInput::make('Number')
                    ->maxLength(45),
                Forms\Components\TextInput::make('postcode')
                    ->maxLength(45),
                Forms\Components\TextInput::make('Town')
                    ->maxLength(45),
                Forms\Components\TextInput::make('Mail')
                    ->maxLength(45),
                Forms\Components\TextInput::make('Tel')
                    ->maxLength(45),
                Forms\Components\TextInput::make('Contact')
                    ->maxLength(45),
                Forms\Components\TextInput::make('BTW')
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
                Tables\Columns\TextColumn::make('CompanyName')
                    ->searchable(),
                Tables\Columns\TextColumn::make('postcode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Town')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Street')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Mail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Tel')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Contact')
                    ->searchable(),
                Tables\Columns\TextColumn::make('BTW')
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomers::route('/create'),
            'edit' => Pages\EditCustomers::route('/{record}/edit'),
        ];
    }
}
