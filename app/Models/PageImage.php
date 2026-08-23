<?php

namespace App\Models;

use App\Enums\ImageType;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PageImage extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'uuid',
        'page_id',
        'path',
        'type',
        'updated_at',
    ];

    protected function casts(): array
    {
        return [
            'type' => ImageType::class,
        ];
    }

    protected static function boot(): void
    {
        parent::boot();

        // auto-sets values on creation
        static::creating(function ($query) {
            $query->uuid = ! empty($query->uuid) ? $query->uuid : getUuid();
        });
    }


    public function getRouteKeyName(): string
    {
        return 'uuid';
    }
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
