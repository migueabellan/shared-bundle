<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Migueabellan\SharedBundle\Domain\ValueObject\Uuid;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\BuiltinType\AbstractStringType;

class UuidType extends AbstractStringType
{
    protected function className(): string
    {
        return Uuid::class;
    }

    public function getSQLDeclaration(array $column, AbstractPlatform $platform): string
    {
        return $platform->getGuidTypeDeclarationSQL($column);
    }
}
