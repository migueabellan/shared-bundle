<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\ValueObject\BuiltinType;

abstract class AbstractDateValueObject extends AbstractDateTimeValueObject
{
    public function value(): string
    {
        return $this->format(self::FORMAT_DATE);
    }

    public function __toString(): string
    {
        return $this->format(self::FORMAT_DATE);
    }
}
