<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\Collection;

use Migueabellan\SharedBundle\Domain\ValueObject\Str;

final class StrCollection extends AbstractCollection
{
    protected function className(): string
    {
        return Str::class;
    }
}
