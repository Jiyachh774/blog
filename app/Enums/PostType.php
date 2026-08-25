<?php

namespace App\Enums;

enum PostType: string
{
    const Post = 'post';
    const Page = 'page';

    public function label(): string
    {
        return match ($this) {
            self::Post => 'Post',
            self::Page => 'Page',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
