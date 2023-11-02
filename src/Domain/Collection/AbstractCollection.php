<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\Collection;

use Migueabellan\SharedBundle\Domain\Assert;

abstract class AbstractCollection implements \Countable, \IteratorAggregate
{
    final private function __construct(private array $items)
    {
        Assert::arrayOf($items, $this->className());
    }

    abstract protected function className(): string;

    public static function from(array $items): static
    {
        return new static($items);
    }

    public static function empty(): static
    {
        return new static([]);
    }

    public function items(): array
    {
        return $this->items;
    }

    public function count(): int
    {
        return count($this->items());
    }

    public function isEmpty(): bool
    {
        return 0 === $this->count();
    }

    final public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->items());
    }

    public function addItem(mixed $item): self
    {
        $this->items[] = $item;

        return static::from($this->items());
    }

    public function removeItem(mixed $item): self
    {
        return $this->filter(fn (mixed $current) => $current !== $item);
    }

    public function each(callable $fn): void
    {
        foreach ($this->items() as $key => $value) {
            $fn($value, $key);
        }
    }

    public function filter(callable $fn): self
    {
        $this->items = \array_values(\array_filter($this->items(), $fn));

        return static::from($this->items());
    }
}
