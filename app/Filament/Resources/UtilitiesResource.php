<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UtilitiesResource\Pages;
use App\Filament\Resources\UtilitiesResource\RelationManagers;
use App\Models\Utilities;
use Filament\Forms;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
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

class UtilitiesResource extends Resource
{
    protected static ?string $model = Utilities::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    protected static ?string $navigationGroup = 'Ceklist Harian';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Ceklis Suhu')
                    ->description('Dilakukan pada pukul 09.00 – 10.00 dan 21.00 – 22.00
                            Untuk pengisian malam dapt edit report yang telah diinput dijam pagi, 
                            kemudian update')
                    ->icon('heroicon-m-information-circle')
                    ->schema([                        
                    ]),
                TextInput::make('user')
                    ->autofocus()
                    ->required(),
                TextInput::make('pic_pagi')
                    ->required(),
                TextInput::make('pic_malam'),
                Select::make('kesesuaian_tanggal')
                    ->options([
                        'sesuai' => 'Sesuai',
                        'tidak_sesuai' => 'Tidak Sesuai',
                    ]),
                TimePicker::make('jam_input_pagi'),
                TimePicker::make('jam_input_malam'),
                Section::make('Ceklist Air')
                    ->icon('heroicon-m-cloud')
                    ->schema([
                        TextInput::make('air_pagi')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(100),
                        TextInput::make('air_malam')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(100),
                        Placeholder::make('pemakaian_air')
                            ->content(function ($record){
                                $sum = null;

                                if (!empty($record->air_pagi) || !empty($record->air_malam)) {
                                    $sum = ($record->air_pagi ?? 0) + ($record->air_malam ?? 0);
                                }

                                return $sum;
                            })                     
                    ])
                    ->columns(3),
                    Section::make('Ceklist Gas')
                    ->icon('heroicon-m-cube')
                    ->schema([
                        TextInput::make('gas_pagi')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(100),
                        TextInput::make('gas_malam')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(100),
                        Placeholder::make('pemakaian_gas')
                            ->content(function ($record){
                                $sum = null;

                                if (!empty($record->gas_pagi) || !empty($record->gas_malam)) {
                                    $sum = ($record->gas_pagi ?? 0) + ($record->gas_malam ?? 0);
                                }

                                return $sum;
                            })                                          
                    ])
                    ->columns(3),
                    // Section::make('Ceklist Listrik')
                    // ->icon('heroicon-m-bolt')
                    // ->schema([
                    //     TextInput::make('listrik_pagi')
                    //         ->numeric()
                    //         ->minValue(1)
                    //         ->maxValue(100),
                    //     TextInput::make('listrik_malam')
                    //         ->numeric()
                    //         ->minValue(1)
                    //         ->maxValue(100),
                    //     Placeholder::make('pemakaian_listrik')
                    //         ->content(function ($record){
                    //             $sum = null;

                    //             if (!empty($record->listrik_pagi) || !empty($record->listrik_malam)) {
                    //                 $sum = ($record->listrik_pagi ?? 0) + ($record->listrik_malam ?? 0);
                    //             }

                    //             return $sum;
                    //         })                           
                    // ])
                    // ->columns(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user')
                    ->sortable(),
                TextColumn::make('pic_pagi')
                    ->sortable(),
                TextColumn::make('pic_malam')
                    ->sortable(),
                TextColumn::make('jam_input_pagi')
                    ->sortable(),
                TextColumn::make('jam_input_malam')
                    ->sortable(),
                TextColumn::make('jam_input_malam')
                    ->sortable(),
                TextColumn::make('air_pagi'),
                TextColumn::make('air_malam'),
                TextColumn::make('pemakaian_air'),
                    // ->getStateUsing(function (Utilities $record){
                    //     return $record->air_pagi + $record->air_malam;
                    // }),
                TextColumn::make('gas_pagi'),
                TextColumn::make('gas_malam'),
                TextColumn::make('pemakaian_gas'),
                TextColumn::make('listrik_pagi'),
                TextColumn::make('listrik_malam'),
                TextColumn::make('pemakaian_listrik'),
                TextColumn::make('keterangan')
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
            'index' => Pages\ListUtilities::route('/'),
            'create' => Pages\CreateUtilities::route('/create'),
            'edit' => Pages\EditUtilities::route('/{record}/edit'),
        ];
    }
}
