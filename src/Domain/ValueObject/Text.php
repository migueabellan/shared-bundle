<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\ValueObject;

use Migueabellan\SharedBundle\Domain\Exception\InvalidArgumentException;
use Migueabellan\SharedBundle\Domain\ValueObject\BuiltinType\AbstractStringValueObject;

class Text extends AbstractStringValueObject
{
    private const MAX_LENGTH = 255;
    private const MESSAGE_MAX_LENGTH_EXCEEDED = 'The length value <%value%> is exceeded';

    public static function from(string $value): static
    {
        if (strlen($value) > self::MAX_LENGTH) {
            throw new InvalidArgumentException(self::MESSAGE_MAX_LENGTH_EXCEEDED, ['%value%' => $value]);
        }

        return parent::from($value);
    }
}
