<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\ValueObject;

use Migueabellan\SharedBundle\Domain\Exception\InvalidArgumentException;
use Migueabellan\SharedBundle\Domain\ValueObject\UrlAddress;
use PHPUnit\Framework\TestCase;

class UrlAddressTest extends TestCase
{
    public function testNotValid()
    {
        $this->expectException(InvalidArgumentException::class);

        $value = 'bad.domain';

        UrlAddress::from($value);
    }

    public function testValueObject()
    {
        $value = 'http://www.domain.es';
        $urlAddress = UrlAddress::from($value);

        $this->assertEquals(UrlAddress::class, get_class($urlAddress));
        $this->assertEquals($value, $urlAddress->value());
    }
}
