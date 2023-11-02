<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping;

use Migueabellan\SharedBundle\Domain\ValueObject\UpdatedAt;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\BuiltinType\AbstractDateTimeType;

class UpdatedAtType extends AbstractDateTimeType
{
    protected function className(): string
    {
        return UpdatedAt::class;
    }
}
