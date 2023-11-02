<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\ValueObject\BuiltinType;

use PHPUnit\Framework\TestCase;

class AbstractFloatTest extends TestCase
{
    public function testValueObject()
    {
        $value = 1.5;
        $valueObject = AbstractFloatTested::from($value);

        $this->assertEquals(AbstractFloatTested::class, get_class($valueObject));
        $this->assertEquals($value, $valueObject->value());
        $this->assertEquals((string)$value, $valueObject);
    }

    public function testIsEqualTo()
    {
        $valueObject = AbstractFloatTested::zero();

        $this->assertTrue($valueObject->isEqualTo(AbstractFloatTested::zero()));
    }

    public function testIsGreaterThan()
    {
        $valueObject = AbstractFloatTested::from(10);

        $this->assertTrue($valueObject->isGreaterThan(AbstractFloatTested::from(9)));
        $this->assertFalse($valueObject->isGreaterThan(AbstractFloatTested::from(10)));
        $this->assertFalse($valueObject->isGreaterThan(AbstractFloatTested::from(11)));
    }

    public function testIsGreaterOrEqualThan()
    {
        $valueObject = AbstractFloatTested::from(10);

        $this->assertTrue($valueObject->isGreaterOrEqualThan(AbstractFloatTested::from(9)));
        $this->assertTrue($valueObject->isGreaterOrEqualThan(AbstractFloatTested::from(10)));
        $this->assertFalse($valueObject->isGreaterOrEqualThan(AbstractFloatTested::from(11)));
    }

    public function testIsLowerThan()
    {
        $valueObject = AbstractFloatTested::from(10);

        $this->assertFalse($valueObject->isLowerThan(AbstractFloatTested::from(9)));
        $this->assertFalse($valueObject->isLowerThan(AbstractFloatTested::from(10)));
        $this->assertTrue($valueObject->isLowerThan(AbstractFloatTested::from(11)));
    }

    public function testIsLowerOrEqualThan()
    {
        $valueObject = AbstractFloatTested::from(10);

        $this->assertFalse($valueObject->isLowerOrEqualThan(AbstractFloatTested::from(9)));
        $this->assertTrue($valueObject->isLowerOrEqualThan(AbstractFloatTested::from(10)));
        $this->assertTrue($valueObject->isLowerOrEqualThan(AbstractFloatTested::from(11)));
    }
}
