<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\ValueObject\BuiltinType;

use Migueabellan\SharedBundle\Domain\Exception\InvalidArgumentException;

abstract class AbstractDateTimeValueObject extends \DateTimeImmutable implements ValueObjectInterface
{
    private const MESSAGE_NOT_VALID = 'The value <%format%> <%datetime%> <%timezone%> is not valid';

    public const TIME_ZONE = 'UTC';
    public const FORMAT_DATE = 'Y-m-d';
    public const FORMAT_DATETIME = 'Y-m-d H:i:s';
    public const FORMAT_TIME = 'H:i:s';

    final private function __construct(string $datetime, \DateTimeZone $timezone)
    {
        parent::__construct($datetime, $timezone);
    }

    public static function from(string $datetime, string $timezone = self::TIME_ZONE): static
    {
        return new static($datetime, new \DateTimeZone($timezone));
    }

    public static function fromFormat(string $format, string $datetime, string $timezone = self::TIME_ZONE): static
    {
        $dateTimeInmutable = \DateTimeImmutable::createFromFormat($format, $datetime, new \DateTimeZone($timezone));

        if (!$dateTimeInmutable) {
            throw new InvalidArgumentException(self::MESSAGE_NOT_VALID, [
                '%format%' => $format,
                '%datetime%' => $datetime,
                '%timezone%' => $timezone
            ]);
        }

        return static::from($dateTimeInmutable->format(self::FORMAT_DATETIME));
    }

    public static function fromTimestamp(int $timestamp, string $timezone = self::TIME_ZONE): static
    {
        return self::fromFormat('U', (string)$timestamp, $timezone);
    }

    public function value(): string
    {
        return $this->format(self::FORMAT_DATETIME);
    }

    public function __toString(): string
    {
        return $this->value();
    }

    public static function now(): static
    {
        return static::from('now');
    }
}
