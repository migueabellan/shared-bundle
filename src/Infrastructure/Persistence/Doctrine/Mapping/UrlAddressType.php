<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping;

use Migueabellan\SharedBundle\Domain\ValueObject\UrlAddress;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\BuiltinType\AbstractStringType;

class UrlAddressType extends AbstractStringType
{
    protected function className(): string
    {
        return UrlAddress::class;
    }
}
