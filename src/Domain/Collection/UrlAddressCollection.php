<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\Collection;

use Migueabellan\SharedBundle\Domain\ValueObject\UrlAddress;

final class UrlAddressCollection extends AbstractCollection
{
    protected function className(): string
    {
        return UrlAddress::class;
    }
}
