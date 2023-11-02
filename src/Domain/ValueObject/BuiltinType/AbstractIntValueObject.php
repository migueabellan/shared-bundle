<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\ValueObject\BuiltinType;

abstract class AbstractIntValueObject implements ValueObjectInterface
{
    final private function __construct(private readonly int $value)
    {
    }

    public static function from(int $value): static
    {
        return new static($value);
    }

    public function value(): int
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return (string)$this->value();
    }

    public static function zero(): static
    {
        return self::from(0);
    }

    public function isZero(): bool
    {
        return 0 === $this->value();
    }

    public function isEqualTo(self $other): bool
    {
        return static::class === \get_class($other) && $this->value() === $other->value();
    }

    public function isGreaterThan(self $other): bool
    {
        return $this->value() > $other->value();
    }

    public function isGreaterOrEqualThan(self $other): bool
    {
        return $this->value() >= $other->value();
    }

    public function isLowerThan(self $other): bool
    {
        return $this->value() < $other->value();
    }

    public function isLowerOrEqualThan(self $other): bool
    {
        return $this->value() <= $other->value();
    }

    public function isBetweenTo(self $lower, self $higher): bool
    {
        return $this->isGreaterOrEqualThan($lower) && $this->isLowerOrEqualThan($higher);
    }
}
