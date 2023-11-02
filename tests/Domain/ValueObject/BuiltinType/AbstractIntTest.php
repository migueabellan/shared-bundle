<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\ValueObject\BuiltinType;

use PHPUnit\Framework\TestCase;

class AbstractIntTest extends TestCase
{
    public function testValueObject()
    {
        $value = 1;
        $valueObject = AbstractIntTested::from($value);

        $this->assertEquals(AbstractIntTested::class, get_class($valueObject));
        $this->assertEquals($value, $valueObject->value());
        $this->assertEquals((string)$value, $valueObject);
    }

    public function testIsEqualTo()
    {
        $valueObject = AbstractIntTested::zero();

        $this->assertTrue($valueObject->isEqualTo(AbstractIntTested::zero()));
    }

    public function testIsGreaterThan()
    {
        $valueObject = AbstractIntTested::from(10);

        $this->assertTrue($valueObject->isGreaterThan(AbstractIntTested::from(9)));
        $this->assertFalse($valueObject->isGreaterThan(AbstractIntTested::from(10)));
        $this->assertFalse($valueObject->isGreaterThan(AbstractIntTested::from(11)));
    }

    public function testIsGreaterOrEqualThan()
    {
        $valueObject = AbstractIntTested::from(10);

        $this->assertTrue($valueObject->isGreaterOrEqualThan(AbstractIntTested::from(9)));
        $this->assertTrue($valueObject->isGreaterOrEqualThan(AbstractIntTested::from(10)));
        $this->assertFalse($valueObject->isGreaterOrEqualThan(AbstractIntTested::from(11)));
    }

    public function testIsLowerThan()
    {
        $valueObject = AbstractIntTested::from(10);

        $this->assertFalse($valueObject->isLowerThan(AbstractIntTested::from(9)));
        $this->assertFalse($valueObject->isLowerThan(AbstractIntTested::from(10)));
        $this->assertTrue($valueObject->isLowerThan(AbstractIntTested::from(11)));
    }

    public function testIsLowerOrEqualThan()
    {
        $valueObject = AbstractIntTested::from(10);

        $this->assertFalse($valueObject->isLowerOrEqualThan(AbstractIntTested::from(9)));
        $this->assertTrue($valueObject->isLowerOrEqualThan(AbstractIntTested::from(10)));
        $this->assertTrue($valueObject->isLowerOrEqualThan(AbstractIntTested::from(11)));
    }
}
