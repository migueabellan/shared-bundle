<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\Collection;

use Migueabellan\SharedBundle\Domain\ValueObject\EmailAddress;

final class EmailAddressCollection extends AbstractCollection
{
    protected function className(): string
    {
        return EmailAddress::class;
    }
}
