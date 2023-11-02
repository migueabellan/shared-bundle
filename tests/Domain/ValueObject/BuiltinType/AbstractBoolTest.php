<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\ValueObject\BuiltinType;

use PHPUnit\Framework\TestCase;

class AbstractBoolTest extends TestCase
{
    public function testValueObject()
    {
        $value = true;
        $valueObject = AbstractBoolTested::from($value);

        $this->assertEquals(AbstractBoolTested::class, get_class($valueObject));
        $this->assertEquals($value, $valueObject->value());
        $this->assertEquals((string)$value, $valueObject);
    }

    public function testTrue()
    {
        $valueObject = AbstractBoolTested::true();

        $this->assertTrue($valueObject->value());
        $this->assertTrue($valueObject->isTrue());
    }

    public function testFalse()
    {
        $valueObject = AbstractBoolTested::false();

        $this->assertFalse($valueObject->value());
        $this->assertTrue($valueObject->isFalse());
    }

    public function testIsEqualTo()
    {
        $value = true;
        $valueObject = AbstractBoolTested::from($value);

        $this->assertTrue($valueObject->isEqualTo(AbstractBoolTested::true()));
    }
}
