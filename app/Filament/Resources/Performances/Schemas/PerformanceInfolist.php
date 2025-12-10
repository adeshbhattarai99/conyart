<?php

namespace App\Filament\Resources\Performances\Schemas;

use App\Models\Performance;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;

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
                        Section::make('Links')
                            ->schema([

                                TextEntry::make('links')
                                    ->hiddenLabel()
                                    ->formatStateUsing(fn($state) => $state ? collect($state)->map(function ($link) {
                                        return "<a href='{$link}' target='_blank' class='text-sm font-medium hover:underline transition-colors block mt-4'>
                  <span class='mr-2'></span>{$link}
                </a>";
                                    })->implode('') : null)
                                    ->html()
                                    ->hidden(fn($record) => blank($record->links))
                            ]),
                        Section::make('Images')
                            ->schema([
                                // This is the nuclear option that always works
                                ImageEntry::make('images')
                                    ->hiddenLabel()
                                    ->disk('public'),
                            ])
                            ->columnSpanFull(),
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
