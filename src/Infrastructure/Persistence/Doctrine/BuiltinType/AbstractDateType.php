<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\BuiltinType;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\DateType;
use Migueabellan\SharedBundle\Domain\ValueObject\BuiltinType\AbstractDateTimeValueObject;

abstract class AbstractDateType extends DateType
{
    abstract protected function className(): string;

    public function convertToPHPValue(mixed $value, AbstractPlatform $platform): mixed
    {
        if ($value === null) {
            return null;
        }

        $value = parent::convertToPHPValue($value, $platform);

        $className = $this->className();

        return $className::from($value->format(AbstractDateTimeValueObject::FORMAT_DATE));
    }

    public function convertToDatabaseValue(mixed $value, AbstractPlatform $platform): mixed
    {
        if ($value === null) {
            return null;
        }

        return parent::convertToDatabaseValue(new \DateTime($value->value()), $platform);
    }
}
