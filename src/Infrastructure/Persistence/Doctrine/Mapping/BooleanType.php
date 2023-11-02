<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping;

use Migueabellan\SharedBundle\Domain\ValueObject\Boolean;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\BuiltinType\AbstractBooleanType;

class BooleanType extends AbstractBooleanType
{
    protected function className(): string
    {
        return Boolean::class;
    }
}
