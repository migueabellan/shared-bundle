<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain;

use Migueabellan\SharedBundle\Domain\Exception\InvalidArgumentException;

final class Assert
{
    private const MESSAGE_NOT_VALID = 'The object <%object%> is not an instance of <%class%>';

    public static function arrayOf(array $items, string $class): void
    {
        foreach ($items as $item) {
            self::instanceOf($item, $class);
        }
    }

    public static function instanceOf(mixed $item, string $class): void
    {
        if (!$item instanceof $class) {
            throw new InvalidArgumentException(self::MESSAGE_NOT_VALID, [
                '%object%' => get_class($item),
                '%class%' => $class
            ]);
        }
    }
}
