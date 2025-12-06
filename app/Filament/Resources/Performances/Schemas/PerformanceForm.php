<?php

namespace App\Filament\Resources\Performances\Schemas;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Image;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;

class PerformanceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Title')
                    ->schema([
                        Textarea::make('title')
                            ->hiddenLabel()
                            ->autosize()
                            ->required(),
                    ]),
                Section::make('Images')
                    ->schema([
                        FileUpload::make('images')
                            ->hiddenLabel()
                            ->multiple()
                            ->directory('performance_media')
                            ->disk('public')                    // important
                            ->visibility('public')
                            ->preserveFilenames()
                            ->reorderable()
                            ->appendFiles()                      // keeps existing + adds new
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->imageEditorMode(2)
                            ->maxFiles(30)
                            ->panelLayout('grid')                // shows nice grid preview while editing
                            ->previewable(true)                  // shows thumbnails
                            ->reorderable()                      // drag to reorder
                            ->required()
                            ->helperText('Drag to reorder. Existing images are preserved.'),
                    ]),

                Section::make('Description')
                    // ->columnSpanFull()
                    ->schema([
                        Tabs::make('description')
                            ->tabs([
                                Tabs\Tab::make('ENG')
                                    ->schema([
                                        RichEditor::make('description_eng')
                                            ->required()
                                            ->toolbarButtons([
                                                ['bold', 'italic', 'underline', 'strike', 'link'],
                                                ['h2', 'h3',],
                                                ['bulletList', 'orderedList'],
                                                // ['table', 'attachFiles'], // The `customBlocks` and `mergeTags` tools are also added here if those features are used.
                                                ['undo', 'redo'],
                                            ])
                                            ->hiddenLabel()
                                            ->columnSpanFull(),
                                    ]),
                                Tabs\Tab::make('ESP')
                                    ->schema([
                                        RichEditor::make('description_esp')
                                            ->required()
                                            ->toolbarButtons([
                                                ['bold', 'italic', 'underline', 'strike', 'link'],
                                                ['h2', 'h3',],
                                                ['bulletList', 'orderedList'],
                                                // ['table', 'attachFiles'], // The `customBlocks` and `mergeTags` tools are also added here if those features are used.
                                                ['undo', 'redo'],
                                            ])
                                            ->hiddenLabel()
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                    ]),

                Section::make('Video Links')
                    ->schema([
                        Repeater::make('links')
                            ->hiddenLabel()
                            ->schema([
                                TextInput::make('links')
                                    ->hiddenLabel()
                                    ->url(),
                            ]),
                    ]),


                // Section::make('Links')
                //             ->columnSpanFull()
                //     ->schema([
                //         Repeater::make('links')
                //             ->hiddenLabel()
                //             ->schema([
                //                 TextInput::make('links')
                //                     ->hiddenLabel()
                //                     ->prefix('https://')
                //                     ->url(),
                //             ]),
                //     ]),

            ]);
    }
}
