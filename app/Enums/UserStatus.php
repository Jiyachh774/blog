<?php

namespace App\Enums;

enum UserStatus: string
{
    const Pending = 'pending';
    const Invited = 'invited';
    const EmailVerified = 'email_verified';
    const Active = 'active';
    const Inactive = 'inactive';
    const Rejected = 'rejected';


    public function label(): string
    {
        return match ($this) {
            self::Pending => 'Pending',
            self::Invited => 'invited',
            self::EmailVerified => 'EmailVerified',
            self::Active => 'Active',
            self::Inactive => 'Inactive',
            self::Rejected => 'Rejected',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
