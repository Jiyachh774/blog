<?php

namespace App\Enums;

enum CategoryStatus: string
{
    const Pending = 'pending';
    const Active = 'active';
    const Rejected = 'rejected';

    public function label(): string
    {
        return match ($this) {
            self::Pending => 'Pending',
            self::Active => 'Active',
            self::Rejected => 'Rejected',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
