<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\ValueObject;

use Migueabellan\SharedBundle\Domain\ValueObject\Boolean;
use PHPUnit\Framework\TestCase;

class BooleanTest extends TestCase
{
    public function testValueObject()
    {
        $value = true;

        $boolean = Boolean::from($value);

        $this->assertEquals(Boolean::class, get_class($boolean));
        $this->assertEquals($value, $boolean->value());
        $this->assertEquals((string)$value, $boolean);
    }
}
