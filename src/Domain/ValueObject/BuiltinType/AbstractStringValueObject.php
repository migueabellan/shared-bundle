<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\ValueObject\BuiltinType;

abstract class AbstractStringValueObject implements ValueObjectInterface
{
    final private function __construct(private readonly string $value)
    {
    }

    public static function from(string $value): static
    {
        return new static($value);
    }

    public function value(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value();
    }

    public function isEmpty(): bool
    {
        return empty($this->value());
    }

    public function isEqualTo(self $other): bool
    {
        return static::class === \get_class($other) && $this->value() === $other->value();
    }
}
