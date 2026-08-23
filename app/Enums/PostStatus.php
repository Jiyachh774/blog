<?php

namespace App\Enums;

enum PostStatus: string
{
    const Draft = 'draft';
    const Published = 'published';
    const Scheduled = 'scheduled';


    public function label(): string
    {
        return match ($this) {
            self::Draft => 'Draft',
            self::Published => 'Published',
            self::Scheduled => 'Scheduled',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
