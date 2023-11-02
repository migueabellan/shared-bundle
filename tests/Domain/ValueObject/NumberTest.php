<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\ValueObject;

use Migueabellan\SharedBundle\Domain\ValueObject\Number;
use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase
{
    public function testValueObject()
    {
        $value = 1;

        $decimal = Number::from($value);

        $this->assertEquals(Number::class, get_class($decimal));
        $this->assertEquals($value, $decimal->value());
        $this->assertEquals((string)$value, $decimal);
    }
}
