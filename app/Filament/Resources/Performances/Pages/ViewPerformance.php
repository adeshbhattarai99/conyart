<?php

namespace App\Filament\Resources\Performances\Pages;

use App\Filament\Resources\Performances\PerformanceResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPerformance extends ViewRecord
{
    protected static string $resource = PerformanceResource::class;

    public function getTitle(): string
    {
        return $this->getRecord()->title; // Assuming the Region model has a "name" field
    }
    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
