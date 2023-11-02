<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\ValueObject\BuiltinType;

use PHPUnit\Framework\TestCase;

class AbstractDateTest extends TestCase
{
    public function testValueObject()
    {
        $value = '2023-10-01';
        $valueObject = AbstractDateTested::from($value);

        $this->assertEquals(AbstractDateTested::class, get_class($valueObject));
        $this->assertEquals($value, $valueObject->value());
        $this->assertEquals($value, $valueObject);
    }

    // ToDo: testing
}
