<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TemperatureResource\Pages;
use App\Filament\Resources\TemperatureResource\RelationManagers;
use App\Models\Temperature;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class TemperatureResource extends Resource
{
    protected static ?string $model = Temperature::class;

    protected static ?string $navigationIcon = 'heroicon-o-eye-dropper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Ceklis Suhu')
                    ->description('Diisi setiap range waktu :
                        09.00 – 11.00
                        15.00 – 16.00
                        19.00 – 21.00
                        – Kode diisi dengan 8 digit kode asset, Contoh : 42170987')
                    ->icon('heroicon-m-information-circle')
                    ->schema([
                        
                    ]),
                TextInput::make('user')
                    ->required(),
                TextInput::make('pic')
                    ->required(),
                Select::make('kesesuaian_tanggal')
                    ->options([
                        'sesuai' => 'Sesuai',
                        'tidak_sesuai' => 'Tidak Sesuai',
                    ]),
                TimePicker::make('jam_input'),

                Section::make('Chiller & Showcase')
                    ->description('Inputkan Kode dan Suhu Chiller')
                    ->schema([
                        Repeater::make('kode_chiller')
                        ->schema([
                            TextInput::make('kode_chiller'),
                        ]),
                        Repeater::make('suhu_chiller')
                        ->schema([
                            TextInput::make('suhu_chiller'),
                        ])
                        
                ])->columns(),

                Section::make('Freezer')
                    ->description('Inputkan Kode dan Suhu Freezer')
                    ->schema([                        
                        TextInput::make('kode_freezer'),
                        TextInput::make('suhu_freezer'),
                    ])->columns(2),

                Section::make('Fryer')
                    ->description('Inputkan Kode dan Suhu Fryer')
                    ->schema([                        
                        TextInput::make('kode_fryer'),
                        TextInput::make('suhu_fryer'),
                    ])->columns(2),
                
                Section::make('Keterangan')
                    ->description('Inputkan Keterangan')
                    ->schema([                        
                        RichEditor::make('keterangan')
                            ->disableToolbarButtons([
                                'attachFiles',
                                'strike',
                        ])
                    ])->columns(1),

                

                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user')
                    ->searchable(),
                TextColumn::make('pic')
                    ->searchable(),
                TextColumn::make('kesesuaian_tanggal')
                    ->searchable(),
                // TextColumn::make('kode_chiller')
                //     ->badge()
                //     ->separator(','),
                TextColumn::make('jam_input'),
                TextColumn::make('created_at')
                    ->dateTime()
            ])
            ->filters([
                
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make()
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
            'index' => Pages\ListTemperatures::route('/'),
            'create' => Pages\CreateTemperature::route('/create'),
            'edit' => Pages\EditTemperature::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', Auth::user()->id);
    }
}
