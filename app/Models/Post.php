<?php

namespace App\Models;

use App\Enums\PostStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use softDeletes;
    protected $fillable = [
        'created_by',
        'uuid',
        'title',
        'slug',
        'excerpt',
        'description',
        'status',
        'scheduled_at',
        'updated_at',
    ];

    protected function casts(): array
    {
        return [
            'status' => PostStatus::class,
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

    public function images()
    {
        return $this->hasMany(PostImage::class);
    }
}
