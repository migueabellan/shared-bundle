<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping;

use Migueabellan\SharedBundle\Domain\ValueObject\EmailAddress;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\BuiltinType\AbstractStringType;

class EmailAddressType extends AbstractStringType
{
    protected function className(): string
    {
        return EmailAddress::class;
    }
}
