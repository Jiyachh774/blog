<?php

namespace App\Enums;

enum CommentStatus: string
{
    const Pending = 'pending';
    const Approved = 'approved';
    const Rejected = 'rejected';

    public function label(): string
    {
        return match ($this) {
            self::Pending => 'Pending',
            self::Approved => 'Approved',
            self::Rejected => 'Rejected',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
