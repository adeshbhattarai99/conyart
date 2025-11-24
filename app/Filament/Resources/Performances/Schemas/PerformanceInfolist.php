<?php

namespace App\Filament\Resources\Performances\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PerformanceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        ImageEntry::make('images')
                            ->columnSpan(1)
                            ->hiddenLabel()
                            ->imageSize(400)
                            ->imageWidth(800),
                        Section::make('Descriptions')
                            ->columns(2)
                            ->schema([
                                TextEntry::make('description_eng')
                                    ->columnSpanFull()
                                    ->label('ENG')
                                    ->html(),
                                TextEntry::make('description_esp')
                                    ->columnSpanFull()
                                    ->label('ESP')
                                    ->html(),
                            ]),
                        TextEntry::make('created_at')
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('updated_at')
                            ->dateTime()
                            ->placeholder('-'),

                    ]),
            ]);
    }
}
