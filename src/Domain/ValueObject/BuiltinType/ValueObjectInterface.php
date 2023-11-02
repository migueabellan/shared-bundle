<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\ValueObject\BuiltinType;

interface ValueObjectInterface extends \Stringable
{
    public function value(): mixed;
}
