<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\ValueObject;

use Migueabellan\SharedBundle\Domain\Exception\InvalidArgumentException;
use Migueabellan\SharedBundle\Domain\ValueObject\EmailAddress;
use PHPUnit\Framework\TestCase;

class EmailAddressTest extends TestCase
{
    public function testNotValid()
    {
        $this->expectException(InvalidArgumentException::class);

        $value = 'bad@email';

        EmailAddress::from($value);
    }

    public function testValueObject()
    {
        $value = 'email@domain.es';

        $emailAddress = EmailAddress::from($value);

        $this->assertEquals(EmailAddress::class, get_class($emailAddress));
        $this->assertEquals($value, $emailAddress->value());
    }
}
