<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping;

use Migueabellan\SharedBundle\Domain\ValueObject\Number;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\BuiltinType\AbstractIntType;

class NumberType extends AbstractIntType
{
    protected function className(): string
    {
        return Number::class;
    }
}
