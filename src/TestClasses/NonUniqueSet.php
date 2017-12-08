<?php

declare(strict_types=1);

namespace Funeralzone\ValueObjects\TestClasses;

use Funeralzone\ValueObjects\Sets\SetOfValueObjects;

final class NonUniqueSet extends SetOfValueObjects
{
    protected function typeToEnforce(): string
    {
        return TestValueObject::class;
    }

    public static function valuesShouldBeUnique(): bool
    {
        return false;
    }
}
