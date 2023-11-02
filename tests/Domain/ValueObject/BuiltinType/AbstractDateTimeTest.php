<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\ValueObject\BuiltinType;

use PHPUnit\Framework\TestCase;

class AbstractDateTimeTest extends TestCase
{
    public function testValueObject()
    {
        $value = '2023-10-01 12:30:45';
        $valueObject = AbstractDateTimeTested::from($value);

        $this->assertEquals(AbstractDateTimeTested::class, get_class($valueObject));
        $this->assertEquals($value, $valueObject->value());
        $this->assertEquals($value, $valueObject);
    }

    // ToDo: testing
}
