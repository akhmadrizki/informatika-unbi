<?php

namespace App\Models\Enums;

use Spatie\Enum\Enum;

/**
 * @method static self admin()
 * @method static self developer()
 */
class RoleUserType extends Enum
{
    protected static function labels()
    {
        return [
            'admin'     => 'Administrator',
            'developer' => 'Developer',
        ];
    }
}
