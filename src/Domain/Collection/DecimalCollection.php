<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\Collection;

use Migueabellan\SharedBundle\Domain\ValueObject\Decimal;

final class DecimalCollection extends AbstractCollection
{
    protected function className(): string
    {
        return Decimal::class;
    }
}
