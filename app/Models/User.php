<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\UserStatus;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Override;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'uuid',
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'avatar',
        'address',
        'bio',
        'status',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'status' => UserStatus::class,
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

    #[Override]
    public function getRouteKeyName(): string
    {
        return 'uuid';
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'created_by');
    }
    public function pages()
    {
        return $this->hasMany(Page::class, 'created_by');
    }
    public function approvedcomments()
    {
        return $this->hasMany(Comment::class, 'approved_by');
    }
}
