<?php

namespace App\Models;

use App\Enums\CommentStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comment extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'post_id',
        'parent_id',
        'approved_by',
        'uuid',
        'description',
        'status',
        'updated_at',
    ];
    protected function casts(): array
    {
        return [
            'status' => CommentStatus::class,
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }
    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
    public function children()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
