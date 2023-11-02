<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping;

use Migueabellan\SharedBundle\Domain\ValueObject\CreatedAt;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\BuiltinType\AbstractDateTimeType;

class CreatedAtType extends AbstractDateTimeType
{
    protected function className(): string
    {
        return CreatedAt::class;
    }
}
