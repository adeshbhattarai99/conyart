<?php

namespace App\Models;

use App\Helpers\CuratorModelHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Performance extends Model
{
    protected $fillable = [
        'title',
        'description_eng',
        'description_esp',
        'images',
    ];
    protected function casts(): array
    {
        return [
            'images' => 'array',
        ];
    }

    // public function performanceImages(): BelongsToMany
    // {
    //     return CuratorModelHelper::belongsToMany($this, 'performance_media', 'performance_id');
    // }
}
