<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\BuiltinType;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\BooleanType;

abstract class AbstractBoolType extends BooleanType
{
    abstract protected function className(): string;

    public function convertToPHPValue(mixed $value, AbstractPlatform $platform): mixed
    {
        $value = parent::convertToPHPValue($value, $platform);

        $className = $this->className();

        return $className::from($value);
    }

    public function convertToDatabaseValue(mixed $value, AbstractPlatform $platform): mixed
    {
        if ($value === null) {
            return null;
        }

        return parent::convertToDatabaseValue($value->value(), $platform);
    }
}
