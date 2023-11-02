<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\ValueObject;

use Migueabellan\SharedBundle\Domain\Exception\InvalidArgumentException;
use Migueabellan\SharedBundle\Domain\ValueObject\Uuid;
use PHPUnit\Framework\TestCase;

class UuidTest extends TestCase
{
    public function testNotValid()
    {
        $this->expectException(InvalidArgumentException::class);

        Uuid::from('bad');
    }

    public function testValueObject()
    {
        $value = 'f2e56fdf-1f28-4606-ad27-5892c9e0701c';

        $uuid = Uuid::from($value);

        $this->assertEquals(Uuid::class, get_class($uuid));
        $this->assertEquals($value, $uuid->value());
    }

    public function testIsValid()
    {
        $this->assertTrue(Uuid::isValid('f2e56fdf-1f28-4606-ad27-5892c9e0701c'));
        $this->assertFalse(Uuid::isValid('BAD'));
    }

    public function testV4()
    {
        $uuid = Uuid::v4();

        $this->assertEquals($uuid, $uuid->value());
    }
}
