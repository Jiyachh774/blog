<?php

namespace App\Models;

use App\Enums\CategoryStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'parent_id',
        'uuid',
        'title',
        'slug',
        'description',
        'status',
        'updated_at',
    ];
    protected function casts(): array
    {
        return [
            'status' => CategoryStatus::class,
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

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
