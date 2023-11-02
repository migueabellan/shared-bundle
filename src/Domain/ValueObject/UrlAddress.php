<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\ValueObject;

use Migueabellan\SharedBundle\Domain\Exception\InvalidArgumentException;
use Migueabellan\SharedBundle\Domain\ValueObject\BuiltinType\AbstractString;

final class UrlAddress extends AbstractString
{
    private const MESSAGE_NOT_VALID = 'The value <%value%> is not a valid url address';

    public static function from(string $value): static
    {
        if (!filter_var($value, FILTER_VALIDATE_URL)) {
            throw new InvalidArgumentException(self::MESSAGE_NOT_VALID, ['%value%' => $value]);
        }

        return parent::from($value);
    }
}
