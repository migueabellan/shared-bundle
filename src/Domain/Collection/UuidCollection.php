<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\Collection;

use Migueabellan\SharedBundle\Domain\ValueObject\Uuid;

final class UuidCollection extends AbstractCollection
{
    protected function className(): string
    {
        return Uuid::class;
    }
}
