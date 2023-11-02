<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\ValueObject\BuiltinType;

use PHPUnit\Framework\TestCase;

class AbstractStringTest extends TestCase
{
    public function testValueObject()
    {
        $value = 'string';
        $valueObject = AbstractStringTested::from($value);

        $this->assertEquals(AbstractStringTested::class, get_class($valueObject));
        $this->assertEquals($value, $valueObject->value());
        $this->assertEquals($value, $valueObject);
    }

    public function testIsEmpty()
    {
        $emptyValueObject = AbstractStringTested::from('');
        $valueObject = AbstractStringTested::from('string');

        $this->assertTrue($emptyValueObject->isEmpty());
        $this->assertFalse($valueObject->isEmpty());
    }

    public function testIsEqualTo()
    {
        $value = 'string';
        $valueObject = AbstractStringTested::from($value);
        $other = AbstractStringTested::from($value);

        $this->assertTrue($valueObject->isEqualTo($other));
    }
}
