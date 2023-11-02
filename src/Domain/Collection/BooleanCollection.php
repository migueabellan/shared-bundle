<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\Collection;

use Migueabellan\SharedBundle\Domain\ValueObject\Boolean;

final class BooleanCollection extends AbstractCollection
{
    protected function className(): string
    {
        return Boolean::class;
    }
}
