<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping;

use Migueabellan\SharedBundle\Domain\ValueObject\BirthdayAt;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\BuiltinType\AbstractDateType;

class BirthdayType extends AbstractDateType
{
    protected function className(): string
    {
        return BirthdayAt::class;
    }
}
