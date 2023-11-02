<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\ValueObject\BuiltinType;

abstract class AbstractBoolValueObject implements ValueObjectInterface
{
    final private function __construct(private readonly bool $value)
    {
    }

    public static function from(bool $value): static
    {
        return new static($value);
    }

    public function value(): bool
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return (string)$this->value();
    }

    public static function true(): static
    {
        return self::from(true);
    }

    public function isTrue(): bool
    {
        return $this->value();
    }

    public static function false(): static
    {
        return self::from(false);
    }

    public function isFalse(): bool
    {
        return !$this->value();
    }

    public function isEqualTo(self $other): bool
    {
        return static::class === \get_class($other) && $this->value() === $other->value();
    }
}
