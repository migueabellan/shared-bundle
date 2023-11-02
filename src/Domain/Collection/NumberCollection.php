<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\Collection;

use Migueabellan\SharedBundle\Domain\ValueObject\Number;

final class NumberCollection extends AbstractCollection
{
    protected function className(): string
    {
        return Number::class;
    }
}
