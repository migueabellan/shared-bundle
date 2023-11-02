<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\ValueObject;

use Migueabellan\SharedBundle\Domain\Exception\InvalidArgumentException;
use Migueabellan\SharedBundle\Domain\ValueObject\BuiltinType\AbstractStringValueObject;
use Symfony\Component\Uid\Uuid as SymfonyUuid;

class Uuid extends AbstractStringValueObject
{
    private const MESSAGE_NOT_VALID = 'The value <%value%> is not a valid UUID';

    public static function from(string $value): static
    {
        if (!SymfonyUuid::isValid($value)) {
            throw new InvalidArgumentException(self::MESSAGE_NOT_VALID, ['%value%' => $value]);
        }

        return parent::from($value);
    }

    public static function v4(): self
    {
        return parent::from(SymfonyUuid::v4()->toRfc4122());
    }

    public static function isValid(string $value): bool
    {
        return SymfonyUuid::isValid($value);
    }
}
