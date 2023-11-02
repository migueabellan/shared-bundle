<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping;

use Migueabellan\SharedBundle\Domain\ValueObject\DeletedAt;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\BuiltinType\AbstractDateTimeType;

class DeletedAtType extends AbstractDateTimeType
{
    protected function className(): string
    {
        return DeletedAt::class;
    }
}
