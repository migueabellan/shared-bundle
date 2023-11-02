<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\ValueObject;

use Migueabellan\SharedBundle\Domain\Exception\InvalidArgumentException;
use Migueabellan\SharedBundle\Domain\ValueObject\BuiltinType\AbstractStringValueObject;

class EmailAddress extends AbstractStringValueObject
{
    private const MESSAGE_NOT_VALID = 'The value <%value%> is not a valid email address';

    public static function from(string $value): static
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(self::MESSAGE_NOT_VALID, ['%value%' => $value]);
        }

        return parent::from($value);
    }
}
