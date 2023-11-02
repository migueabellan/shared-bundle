<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\ValueObject;

use Migueabellan\SharedBundle\Domain\ValueObject\Decimal;
use PHPUnit\Framework\TestCase;

class DecimalTest extends TestCase
{
    public function testValueObject()
    {
        $value = 1.23;

        $decimal = Decimal::from($value);

        $this->assertEquals(Decimal::class, get_class($decimal));
        $this->assertEquals($value, $decimal->value());
        $this->assertEquals((string)$value, $decimal);
    }
}
