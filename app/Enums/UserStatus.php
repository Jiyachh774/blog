<?php

namespace App\Enums;

enum UserStatus: string
{
    case Pending = 'pending';
    case Invited = 'invited';
    case EmailVerified = 'email_verified';
    case Active = 'active';
    case Inactive = 'inactive';
    case Rejected = 'rejected';


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
