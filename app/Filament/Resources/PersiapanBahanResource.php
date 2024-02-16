<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersiapanBahanResource\Pages;
use App\Filament\Resources\PersiapanBahanResource\RelationManagers;
use App\Models\PersiapanBahan;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PersiapanBahanResource extends Resource
{
    protected static ?string $model = PersiapanBahan::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    protected static ?string $navigationGroup = 'Ceklist Harian';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('user')
                    ->required(),
                TextInput::make('nama_pic')
                    ->required(),
                Select::make('kesesuaian_tanggal')
                    ->options([
                        'sesuai' => 'Sesuai',
                        'tidak_sesuai' => 'Tidak Sesuai',
                    ]),
                TimePicker::make('jam_input'),
                Select::make('crispy_flour')
                    ->options([
                        'ya' => 'Ya',
                        'tidak' => 'Tidak',
                    ]),
                TextInput::make('chicken_custom')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(100),
                Select::make('bumbu')
                    ->label(('Bumbu (Ori, BBQ, Seaweed)'))
                    ->options([
                        'ya' => 'Ya',
                        'tidak' => 'Tidak',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('nama_pic')
                    ->sortable(),
                TextColumn::make('kesesuaian_tanggal'),
                TextColumn::make('jam_input'),
                TextColumn::make('cripsy_flour')
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
            'index' => Pages\ListPersiapanBahans::route('/'),
            'create' => Pages\CreatePersiapanBahan::route('/create'),
            'edit' => Pages\EditPersiapanBahan::route('/{record}/edit'),
        ];
    }
}
