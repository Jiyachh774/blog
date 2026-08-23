<?php

namespace App\Enums;

enum ImageType: string
{
    const Banner = 'banner';
    const Thumbnail = 'thumbnail';
    const Gallery = 'gallery';


    public function label(): string
    {
        return match ($this) {
            self::Banner => 'Banner',
            self::Thumbnail => 'thumbnail',
            self::Gallery => 'Gallery',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
