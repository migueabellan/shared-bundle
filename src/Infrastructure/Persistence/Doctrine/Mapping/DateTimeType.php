<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping;

use Migueabellan\SharedBundle\Domain\ValueObject\DateTime;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\BuiltinType\AbstractDateTimeType;

class DateTimeType extends AbstractDateTimeType
{
    protected function className(): string
    {
        return DateTime::class;
    }
}
