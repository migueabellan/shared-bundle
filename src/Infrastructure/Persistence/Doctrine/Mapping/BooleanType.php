<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping;

use Migueabellan\SharedBundle\Domain\ValueObject\Boolean;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\BuiltinType\AbstractBoolType;

class BooleanType extends AbstractBoolType
{
    protected function className(): string
    {
        return Boolean::class;
    }
}
